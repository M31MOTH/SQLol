<?php 
/*
SQLol - A configurable SQL injection testbed
Daniel "unicornFurnace" Crowley
Copyright (C) 2012 Trustwave Holdings, Inc.

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program. If not, see <http://www.gnu.org/licenses/>.
*/
?>
<html>
<head>
	<title>SQLol - Challenge 5 - Walking on Thin Ice</title>
</head>
<body>
	<center><h1>SQLol - Challenge 5 - Walking on Thin Ice</h1></center><br>

	<hr width="40%">
	<hr width="60%">
	<hr width="40%">
	
In this challenge, no output from the query is shown, but verbose errors are shown.<br>
<br>
Your objective is to find the table of social security numbers present in the database and extract its information WITHOUT deleting anything from the database.<br>
(If you do happen to destroy the database, you can always use the <a href="../resetbutton.php">SQLol reset button</a> to bring it back to its original state.)

<pre>
PARAMETERS:
Query Type - DELETE query
Injection Type - String value in WHERE clause
Method - POST
Sanitization - None
Output - No results, verbose error messages, query not shown
</pre>

<form action="../delete.php?method=post" method="post" name="challenge_form">
	<input type="hidden" name="sanitize_quotes" value="none"/>
	<input type="hidden" name="spaces_remove" value="off"/>
	<input type="hidden" name="keyword_blacklist" value="none"/>
	<input type="hidden" name="query_results" value="none"/>
	<input type="hidden" name="error_level" value="verbose"/>
	<input type="hidden" name="show_query" value="off"/>
	<input type="hidden" name="location" value="where_string"/>
	Injection String: <input type="text" name="inject_string"/><br>
	<input type="submit" name="submit" value="Inject!"/>
</form>
<br>
<pre>
This challenge has known solutions on the following databases (others may have solutions):
MySQL
SQL Server
Oracle
</pre>
</body>
</html>