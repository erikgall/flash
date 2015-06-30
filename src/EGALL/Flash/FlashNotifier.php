<?php

namespace EGALL\Flash;

/**
 * Flash notifier
 *
 * @package EGALL\Flash
 * @author Erik Galloway <erik@mybarnapp.com>
 * @version 1.0.0
 */
class FlashNotifier
{

	/**
	 * The session writer.
	 *
	 * @var SessionStore
	 */
	private $session;

	/**
	 * Create a new flash notifier instance.
	 *
	 * @param SessionStore $session
	 */
	function __construct(SessionStore $session)
	{
		$this->session = $session;
	}


	/**
	 * Flash a new information message.
	 * @param $message
	 * @return $this
	 */
	public function info($message) {

		$this->message($message, 'info');

		return $this;

	}

	/**
	 * Flash a new success message.
	 *
	 * @param string $message
	 * @return $this
	 */
	public function success($message) {

		$this->message($message, 'success');

		return $this;

	}

	/**
	 * Flash a new error message.
	 *
	 * @param string $message
	 * @return $this
	 */
	public function error($message) {

		$this->message($message, 'error');

		return $this;

	}

	/**
	 * Flash a new warning message.
	 *
	 * @param $message
	 */
	public function warning($message) {

		$this->message($message, 'warning');

	}

	/**
	 * Flash an overlay modal.
	 * @param string $message
	 * @param string $title
	 * @return $this
	 */
	public function overlay($message, $title = 'Notice') {

		$this->message($message, 'info', $title);

		$this->session->flash('egall.overlay', TRUE);

		$this->session->flash('egall.title', $title);

		return $this;
		
	}

	/**
	 * Flash a general message.
	 *
	 * @param string $message
	 * @param string $level
	 * @return $this
	 */
	public function message($message, $level = 'info') {

		$this->session->flash('egall.message', $message);

		$this->session->flash('egall.level', $level);

		return $this;
		
	}

	/**
	 * Add an important flash message to the session.
	 *
	 * @param $message
	 * @return $this
	 */
	public function important($message) {

		$this->session->flash('egall.important', TRUE);

		return $this;

	}


}