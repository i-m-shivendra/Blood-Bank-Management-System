<!DOCTYPE html>
<html>
  <head>
    <title>Student Registration Form</title>
  </head>
  <body>
    <h1>Student Registration Form</h1>
    <form>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"  placeholder="Name" required><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email"  placeholder="Email" required>

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" placeholder="Phone" required><br>

      <label for="dob">Date of Birth:</label>
      <input type="date" id="dob" name="dob" placeholder="DOB" required><br>

      <label for="gender">Gender:</label>
		<input type="radio" id="male" name="gender" value="male" required>
		<label for="male">Male</label>
		<input type="radio" id="female" name="gender" value="female" required>
		<label for="female">Female</label><br><br>

        <label for="aadhaar">Aadhaar Number:</label>
		<input type="text" id="aadhaar" name="aadhaar"  placeholder="Aadhaar no" required><br>

      <label for="Caste">Caste:</label>
      <select id="Caste" name="Caste" required>
        <option value="">Select</option>
        <option value="General">General</option>
        <option value="OBC">OBC</option>
        <option value="SC/ST">SC/ST</option>
      </select><br>

      <label for="Religion">Religion:</label>
      <input type="text" id="religion" name="religion"   placeholder= "Religion" required>

      <label for="blood Group">Blood Group:</label>
      <input type="text" id="blood group" name="blood group" required><br>

      <label for="">:</label>
      <input type="tel" id="" name="" required><br>


      <label for="address">Address:</label>
      <textarea id="address" name="address"  placeholder = "Address" required></textarea><br>

      <label for="course">Course:</label>
		<select id="course" name="course" required>
			<option value="">--Select--</option>
			<option value="BCA">BCA</option>
			<option value="BBA">BBA</option>
			<option value="B.Tech">B.Tech</option>
			<option value="MBA">MBA</option>
			<option value="MCA">MCA</option>
			<option value="M.Tech">M.Tech</option>
		</select><br><br>

        


      <input type="submit" value="Submit">
    </form>
  </body>
</html>