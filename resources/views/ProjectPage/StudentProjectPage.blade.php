<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<!--link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"-->

<style> 
div { 
	box-sizing: border-box; 
	width: 100%; 
	border: 100px solid black; 
	float: left; 
	align-content: center; 
	align-items: center; 
} 

form { 
	margin: 0 auto; 
	width: 800px; 
}

.div1 {
  width: 300px;
  height: 100px;
  border: 1px solid black;
}
.bg-secondary{}

.btn {
    width:120px;
    padding:5px;
}
</style> 








<body> 
	<h2 class="p-3 mb-2 bg-dark text-white" style="text-align: center;">Project Details For Students</h2> 
	<form class="p-3 mb-2 bg-secondary text-white" name="ProjectForm" action="/submit.php"
        onsubmit="return GEEKFORGEEKS()" method="post"> 
        
        <p>Student ID :<br> <input type="text"
                        size="45" name="StudentID" />
                    </p> 
        <br />
        
        <p>Project ID :<br> <input type="text"
                        size="45" name="ProjectID" />
                    </p> 
        <br />
        
		<p>Title of the project :<br> <input type="text"
                        size="65" name="Titleoftheproject" />
                    </p> 
		<br /> 
		<p>Description :<br> <input type="text"
						class="div1" name="Description" /></p> 
        <br /> 
        <p> 
			Project Type <br>
			<select type="text" value="" name="ProjectType"> 
				<option>Project for first year</option> 
				<option>Project for second year</option> 
				<option>Project for third year</option> 
				<option>Project for fourth year</option> 
				
			</select> 
        </p> 
        <br />
		<p> 
            Selected Subjects<br>
			<select type="text" value="" name="SelectedSubjectsandTopic"> 
				<option>computer science</option> 
				<option>                  </option> 
				<option>                    </option> 
				<option>                    </option> 
				
            </select>
        </p> 
		<br /> 
		<p> 
            Technologies<br>
			<select type="text" value="" name="Technologies"> 
				<option>Arduino</option> 
				<option>c#</option> 
				<option>c</option> 
                <option>c++</option> 
                <option>cakePHp</option>
                <option>CSS</option>
                <option>core Java</option>
                <option>ASP NET MVC</option>
                <option>ASP NET</option>
                <option>drupal</option>
                <option>AJAX</option>
                <option>Android</option>
                <option>Apache</option>
				
				
            </select>
        </p> 
		<br />
		<br />
			<input class="btn btn-info" type="Submit"
				value="Submit" name="Submit" /> 
			<input class="btn btn-warning" type="Cancel"
				value="Cancel" name="Cancel" /> 
		</p> 
	</form> 
</body> 



<script> 
	function GEEKFORGEEKS() { 
        var StudentID = document.forms["ProjectForm"]["StudentID"]; 
        var ProjectID = document.forms["ProjectForm"]["ProjectID"]; 
		var Titleoftheproject = document.forms["ProjectForm"]["Titleoftheproject"]; 
		var Description = document.forms["ProjectForm"]["Description"]; 
		var ProjectType = document.forms["ProjectForm"]["ProjectType"]; 
		var SelectedSubjects = document.forms["ProjectForm"]["SelectedSubjects"]; 
		var Technologies = document.forms["ProjectForm"]["Technologies"]; 
		

        if (password.value == "") { 
			window.alert("Please select StudentID."); 
			password.focus(); 
			return false; 
		} 

        if (password.value == "") { 
			window.alert("Please select ProjectID."); 
			password.focus(); 
			return false; 
		} 

		if (name.value == "") { 
			window.alert("Please enter Title of the project."); 
			name.focus(); 
			return false; 
		} 

		if (address.value == "") { 
			window.alert("Please enter Description."); 
			address.focus(); 
			return false; 
		} 

		if (email.value == "") { 
			window.alert( 
			"Please select Project Type."); 
			email.focus(); 
			return false; 
		} 

		if (phone.value == "") { 
			window.alert( 
			"Please select Selected Subjects."); 
			phone.focus(); 
			return false; 
		} 

		if (password.value == "") { 
			window.alert("Please select Technologies."); 
			password.focus(); 
			return false; 
		} 

        

		

		return true; 
	} 
</script> 

 

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


