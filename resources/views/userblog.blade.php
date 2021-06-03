<html>
<body>
<form action="submit" method="POST">
	@csrf
	<h2>Create Blog</h2>

	Username: <input type="text" name="user_name" id=""><br><br>
	Title: <textarea name="title" id="" cols="30"  rows="10"></textarea><br><br>

	Blog: <textarea name="blog" id="" cols="30"  rows="10"></textarea><br><br>
	<button type="submit">Submit Data</button>

	
</form>
</body>
</html>