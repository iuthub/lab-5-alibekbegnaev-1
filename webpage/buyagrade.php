<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Buy Your Way to a Better Education!</h1>

		<p>
			The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
		</p>
		
		<hr />
		
		<h2>Give Us Your Money</h2>
		<form action="buyagrade.php" method="post">
		<dl>
			<dt>Name</dt>
			<dd>
				<input type="text" name="name"/>
			</dd>
			
			<dt>Section</dt>
			<dd>
				<select name="Section:">
					<option>001</option>
					<option>002</option>
					<option>003</option>
					<option>004</option>
				</select>
			</dd>
			
			<dt>Credit Card</dt>
			<dd>
				<input type="text" name="credit"/>
				<p><input type="radio" name="visa" value="visa"/>Visa
				<input type="radio" name="mastercard" value="master" />Mastercard</p>
			</dd>
		</dl>
		
		<div>
			<input type="submit" name="button" value="I am a giant sucker."/>
		</div>

	</body>
</html>