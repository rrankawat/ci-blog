<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function register() {
		$data['title'] = 'Sign Up';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
		$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

		if($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('users/register', $data);
			$this->load->view('templates/footer');
		} else {
			// Encrypt Password
			$enc_password = md5($this->input->post('password'));

			$this->user_model->register($enc_password);

			// Set message
			$this->session->set_flashdata('user_registered', 'You are now registered and can login');

			redirect('posts');
		}
	}

	// Check if username is exists
	public function check_username_exists($username) {
		$this->form_validation->set_message('check_username_exists', 'This username already been taken.');

		if($this->user_model->check_username_exists($username)) {
			return true;
		} else {
			return false;
		}
	}

	// Check if email is exists
	public function check_email_exists($email) {
		$this->form_validation->set_message('check_email_exists', 'This email already been taken.');

		if($this->user_model->check_email_exists($email)) {
			return true;
		} else {
			return false;
		}
	}

	// Login users
	public function login() {
		$data['title'] = 'Sign In';

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('users/login', $data);
			$this->load->view('templates/footer');
		} else {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$user_id = $this->user_model->login($username, $password);

			if($user_id) {
				// Create session
				$user_data = array(
					'user_id' => $user_id,
					'username' => $username,
					'logged_in' => true
				);

				$this->session->set_userdata($user_data);

				// Set message
				$this->session->set_flashdata('user_Loggedin', 'You are now logged in');

				redirect('posts/index');
			} else {
				// Set message
				$this->session->set_flashdata('login_failed', 'Invalid username or password');

				redirect('users/login');
			}
		}
	}

	public function logout() {
		// Unset user data
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('logged_in');

		// Set message
		$this->session->set_flashdata('user_loggedout', 'Logout success');

		redirect('users/login');
	}
}