<form action="index.php" method="POST">
  <input name="fio" />
  <select name="year">
  <?php 
    for ($i = 1922; $i <= 2022; $i++) {
      printf('<option value="%d">%d год</option>', $i, $i);
    }
    ?>
  </select>
  
  <input type="submit" value="ok" />
</form>







<!-- <html lang="en"> 
<head>
  <meta charset='utf-8'/>
  <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'/>
</head>
<body>
<div class="form-wrapper">
<div class="form-layer">
<h1 class ="titles" id="linktitle"> Form </h1>
  <form action ="backend/" method = "POST">
	<label>
			Name:<br />
			<input name="field-name-1" />
		  </label><br />
	<label>
			email:<br />
			<input name="field-email"
			  type="email" />
		  </label><br />
	<label>
			Birth-date :<br />
			<input name="field-date"
			  type="date" />
		  </label><br />
	Sex: <label><input type="radio" checked="checked"
			name="radio-group-1" value = "male" />
			Male </label>
		  <label><input type="radio"
			name="radio-group-1" value = "female" />
			Female </label><br />
	Amoflimbs: <br/> <label><input type="radio" checked="checked"
			name="radio-group-2" value = "1" />
			1 </label><br/>
		  <label><input type="radio"
			name="radio-group-2" value = "2" />
			2 </label><br />
			<label><input type="radio"
			name="radio-group-2" value = "3" />
			3 </label><br />
			<label><input type="radio"
			name="radio-group-2" value = "4" />
			4 </label><br />
			<label><input type="radio"
			name="radio-group-2" value = "5" />
			5 </label><br />
	<label>
			Superpowers:
			<br/>
			<select name="field-name-4[]"
			  multiple="multiple">
			  <option value="immortality">Immortality</option>
			  <option value="walkthroughwalls" >Walk through walls</option>
			  <option value="levitation">levitation</option>
			</select>
		  </label><br />
	<label>
	Biography: <br/>
	  <textarea name = "bio-field"> </textarea>
	</label> <br/>
	<label>
	  <input type = "checkbox" name = "checkbox"> I agree with the contract </label> <br/>
	  Send: <br/>
	  <input type="submit" value="Sending" />
  </form>
</div>
</div>
</body>
</html>

