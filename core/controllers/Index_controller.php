<?php

defined('_EXEC') or die;

class Index_controller extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		define('_title', Configuration::$web_page . ' | {$lang.home}');

		header('Location: /nuestro-tour-de-casa');

		$template = $this->view->render($this, 'index');

		echo $template;
	}

	public function ek()
	{
		define('_title', Configuration::$web_page . ' | Ek Balam + Yalcobá + Santa Rita');

		$template = $this->view->render($this, 'ek');

		echo $template;
	}

	public function ch()
	{
		define('_title', Configuration::$web_page . ' | Chichen Itza');

		$template = $this->view->render($this, 'ch');

		echo $template;
	}

	public function rl()
	{
		define('_title', Configuration::$web_page . ' | Rio Lagartos');

		$template = $this->view->render($this, 'rl');

		echo $template;
	}

	public function otherstours()
	{
		define('_title', Configuration::$web_page . ' | {$lang.others_tours}');

		$template = $this->view->render($this, 'otherstours');

		echo $template;
	}

	public function booknow($params)
	{
		if (Format::exist_ajax_request() == true)
		{
			$errors = [];

			if (empty($_POST['tour']))
				array_push($errors, ['{$lang.tour}: {$lang.dont_leave_this_field_empty}']);

			if (empty($_POST['date']))
				array_push($errors, ['{$lang.date}: {$lang.dont_leave_this_field_empty}']);

			if (empty($_POST['adults']))
				array_push($errors, ['{$lang.adults}: {$lang.dont_leave_this_field_empty}']);
			else if ($_POST['adults'] < 1)
				array_push($errors, ['{$lang.adults}: {$lang.invalid_field}']);

			if (!empty($_POST['childrens']) AND $_POST['childrens'] < 0)
				array_push($errors, ['{$lang.childrens}: {$lang.invalid_field}']);

			if (empty($_POST['firstname']))
				array_push($errors, ['{$lang.firstname}: {$lang.dont_leave_this_field_empty}']);

			if (empty($_POST['lastname']))
				array_push($errors, ['{$lang.lastname}: {$lang.dont_leave_this_field_empty}']);

			if (empty($_POST['email']))
				array_push($errors, ['{$lang.email}: {$lang.dont_leave_this_field_empty}']);

			if (empty($_POST['phone']))
				array_push($errors, ['{$lang.phone}: {$lang.dont_leave_this_field_empty}']);

			if (empty($errors))
			{
				$mail_1 = new Mailer(true);

				try
				{
					$mail_1->setFrom(Configuration::$smtp_emailer, Configuration::$web_page);
					$mail_1->addAddress($_POST['email'], $_POST['firstname'] . ' ' . $_POST['lastname']);
					$mail_1->Subject = Languages::email('thanks_for_contact_us');
					$mail_1->Body =
					'<html>
						<head>
							<title>' . $mail_1->Subject . '</title>
						</head>
						<body>
							<table style="width:100%;max-width:600px;margin:0px;padding:0px;border:0px;background-color:#000;">
								<tr style="width:100%;margin:0px;padding:0px;border:0px;">
									<td style="width:100px;margin:0px;padding:20px 0px 20px 20px;border:0px;box-sizing:border-box;vertical-align:middle;">
										<img style="width:100px" src="https://' . Configuration::$domain . '/images/logotype.png">
									</td>
									<td style="width:auto;margin:0px;padding:20px;border:0px;box-sizing:border-box;vertical-align:middle;">
										<table style="width:100%;margin:0px;padding:0px;border:0px;">
											<tr style="width:100%;margin:0px;padding:0px;border:0px;">
												<td style="width:100%;margin:0px;padding:0px;border:0px;font-size:12px;font-weight:600;text-align:right;color:#fff;">' . Configuration::$web_page . '</td>
												<td style="width:100%;margin:0px;padding:0px;border:0px;font-size:12px;font-weight:600;text-align:right;color:#fff;">RFC: ' . Configuration::$vars['sat']['rfc'] . '</td>
												<td style="width:100%;margin:0px;padding:0px;border:0px;font-size:12px;font-weight:600;text-align:right;color:#fff;">RNT: ' . Configuration::$vars['sectur']['rnt'] . '</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<table style="width:100%;max-width:600px;margin:20px 0px;padding:0px;border:1px dashed #000;box-sizing:border-box;background-color:#fff;">
								<tr style="width:100%;margin:0px;padding:0px;border:0px;">
									<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:18px;font-weight:600;text-align:center;text-transform:uppercase;color:#000;">' . Languages::email('thanks_for_book_with_us') . '</td>
								</tr>
								<tr style="width:100%;margin:0px;padding:0px;border:0px;">
									<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:center;color:#757575;">' . Languages::email('a_one_of_our_representatives') . '</td>
								</tr>
								<tr style="width:100%;margin:0px;padding:0px;border:0px;">
									<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#757575;">' . Languages::email('tour') . ': ' . Languages::email($_POST['tour']) . '</td>
								</tr>
								<tr style="width:100%;margin:0px;padding:0px;border:0px;">
									<td style="width:100%;margin:0px;padding:0px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#757575;">' . Languages::email('date') . ': ' . $_POST['date'] . '</td>
								</tr>
								<tr style="width:100%;margin:0px;padding:0px;border:0px;">
									<td style="width:100%;margin:0px;padding:0px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#757575;">' . Languages::email('adults') . ': ' . $_POST['adults'] . '</td>
								</tr>
								<tr style="width:100%;margin:0px;padding:0px;border:0px;">
									<td style="width:100%;margin:0px;padding:0px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#757575;">' . Languages::email('childrens') . ': ' . $_POST['childrens'] . '</td>
								</tr>
								<tr style="width:100%;margin:0px;padding:0px;border:0px;">
									<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#757575;">' . Languages::email('to_book_with_us_1') . ' <a href="https://' . Configuration::$domain . '/terms-and-conditions">' . Languages::email('terms_and_conditions') . '</a> ' . Languages::email('to_book_with_us_2') . ' <a href="https://' . Configuration::$domain . '/privacy-notice">' . Languages::email('privacy_notice') . '</a></td>
								</tr>
								<tr style="width:100%;margin:0px;padding:0px;border:0px;">
									<td style="width:100%;margin:0px;padding:20px;border:0px;box-sizing:border-box;">
										<a style="width:100%;display:block;margin:0px;padding:10px;border:0px;border-radius:5px;box-sizing:border-box;background-color:#009688;font-size:14px;font-weight:400;text-align:center;text-decoration:none;color:#fff;" href="https://api.whatsapp.com/send?phone=' . Configuration::$vars['contact']['phone'] . '">' . Languages::email('contact_us_whatsapp') . '</a>
									</td>
								</tr>
							</table>
							<table style="width:100%;max-width:600px;margin:0px;padding:0px;border:0px;background-color:#000;">
								<tr style="width:100%;margin:0px;padding:0px;border:0px;">
									<td style="width:100%;margin:0px;padding:0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#fff;"><a style="text-decoration:none;color:#fff;" href="mailto:' . Configuration::$vars['contact']['phone'] . '">' . Configuration::$vars['contact']['phone'] . '</a></td>
								</tr>
								<tr style="width:100%;margin:0px;padding:0px;border:0px;">
									<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#fff;"><a style="text-decoration:none;color:#fff;" href="https://api.whatsapp.com/send?phone=' . Configuration::$vars['contact']['email'] . '">' . Configuration::$vars['contact']['email'] . '</a></td>
								</tr>
								<tr style="width:100%;margin:0px;padding:0px;border:0px;">
									<td style="width:100%;margin:0px;padding:0px 20px 20px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#fff;"><a style="text-decoration:none;color:#fff;" href="https://' . Configuration::$domain . '">' . Configuration::$domain . '</a></td>
								</tr>
								<tr style="width:100%;margin:0px;padding:0px;border:0px;">
									<td style="width:100%;margin:0px;padding:0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#fff;">Copyright (C) <a style="text-decoration:none;color:#fff;" href="https://' . Configuration::$domain . '">' . Configuration::$web_page . '</a></td>
								</tr>
								<tr style="width:100%;margin:0px;padding:0px;border:0px;">
									<td style="width:100%;margin:0px;padding:0px 20px 20px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#fff;">' . Languages::email('website_development_by') . ' <a style="text-decoration:none;color:#fff;" href="https://codemonkey.com.mx">Code Monkey</a></td>
								</tr>
							</table>
						</body>
					</html>';
					$mail_1->send();
				}
				catch (Exception $e) {}

				$mail_2 = new Mailer(true);

				try
				{
					$mail_2->setFrom(Configuration::$smtp_emailer, Configuration::$web_page);
					$mail_2->addAddress(Configuration::$vars['contact']['email'], Configuration::$web_page);
					$mail_2->Subject = 'Nueva reservación';
					$mail_2->Body =
					'Tour: ' . Languages::email($_POST['tour']) . '<br>
					Fecha: ' . $_POST['date'] . '<br>
					Adultos: ' . $_POST['adults'] . '<br>
					Niños: ' . $_POST['childrens'] . '<br>
					Nombre: ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . '<br>
					Correo electrónico: ' . $_POST['email'] . '<br>
					Telefono: ' . $_POST['phone'] . '<br>
					Comentarios: ' . (!empty($_POST['comments']) ? $_POST['comments'] : 'Sin comentarios');
					$mail_2->send();
				}
				catch (Exception $e) {}

				echo json_encode([
					'status' => 'success',
					'message' => '{$lang.thanks_for_book_with_us}'
				]);
			}
			else
			{
				echo json_encode([
					'status' => 'error',
					'errors' => $errors
				]);
			}
		}
		else
		{
			define('_title', Configuration::$web_page . ' | {$lang.book_now}');

			global $global;

			$global['render'] = $params[0];

			$template = $this->view->render($this, 'booknow');

			echo $template;
		}
	}

	public function contactus()
	{
		if (Format::exist_ajax_request() == true)
		{
			$errors = [];

			if (empty($_POST['name']))
				array_push($errors, ['{$lang.name}: {$lang.dont_leave_this_field_empty}']);

			if (empty($_POST['email']))
				array_push($errors, ['{$lang.email}: {$lang.dont_leave_this_field_empty}']);

			if (empty($_POST['phone']))
				array_push($errors, ['{$lang.phone}: {$lang.dont_leave_this_field_empty}']);

			if (empty($_POST['message']))
				array_push($errors, ['{$lang.message}: {$lang.dont_leave_this_field_empty}']);

			if (empty($errors))
			{
				$mail = new Mailer(true);

				try
				{
					$mail->setFrom(Configuration::$smtp_emailer, Configuration::$web_page);
					$mail->addAddress(Configuration::$vars['contact']['email'], Configuration::$web_page);
					$mail->Subject = 'Nuevo contacto';
					$mail->Body =
					'Nombre: ' . $_POST['name'] . '<br>
					Correo electrónico: ' . $_POST['email'] . '<br>
					Teléfono: ' . $_POST['phone'] . '<br>
					Mensaje: ' . $_POST['message'];
					$mail->send();
				}
				catch (Exception $e) {}

				echo json_encode([
					'status' => 'success',
					'message' => '{$lang.thanks_for_contact_us}'
				]);
			}
			else
			{
				echo json_encode([
					'status' => 'error',
					'errors' => $errors
				]);
			}
		}
		else
		{
			define('_title', Configuration::$web_page . ' | {$lang.contact_us}');

			$template = $this->view->render($this, 'contactus');

			echo $template;
		}
	}

	public function termsandconditions()
	{
		define('_title', Configuration::$web_page . ' | {$lang.terms_and_conditions}');

		$template = $this->view->render($this, 'termsandconditions');

		echo $template;
	}

	public function privacynotice()
	{
		define('_title', Configuration::$web_page . ' | {$lang.privacy_notice}');

		$template = $this->view->render($this, 'privacynotice');

		echo $template;
	}
}
