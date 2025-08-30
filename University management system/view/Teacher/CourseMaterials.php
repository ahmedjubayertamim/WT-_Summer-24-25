<!DOCTYPE html>
<html>
<head>
  <title>Manage Course Materials</title>
  <link rel="stylesheet" href="../../css/style.css">
  <style>
    .form-container {
      background: #fff;
      padding: 20px;
      margin: 20px auto;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      max-width: 700px;
    }
    .form-container h2 {
      margin-bottom: 15px;
      text-align: center;
      color: #3b5998;
    }
    label {
      font-weight: bold;
      display: block;
      margin-top: 10px;
    }
    input, select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    button {
      margin-top: 15px;
      background: #3b5998;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      width: 100%;
    }
    button:hover {
      background: #2c3e50;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 25px;
    }
    table th, table td {
      padding: 10px;
      border: 1px solid #ccc;
      text-align: center;
    }
    table th {
      background: #3b5998;
      color: #fff;
    }
  </style>
</head>
<body>
  <header>
    <h1>Manage Course Materials</h1>

    <div class="search-box">
      <input type="text" placeholder="Search...">
      <button>Search</button>
    </div>
  </header>

 
  <div class="sidebar">
  <ul>
    <li><a href="TeacherDashboard.php">Dashboard</a></li>
    <li><a href="CourseMaterials.php">Manage Course Materials</a></li>
    <li><a href="StudentAttendance.php">Manage Attendance</a></li>
    <li><a href="SubmitResult.php">Submit Grades</a></li>
    <li><a href="ViewSalary.php">View Salary</a></li>
    <li><a href="SetConsulting.php">Consulting Hours</a></li>
    <li><a href="ApproveStudentRequest.php">Approve Student Requests</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div>
    




 

  <div class="form-container">
    <h2>Upload Course Materials</h2>
    <form action="upload_materials.php" method="POST" enctype="multipart/form-data">
      <label for="course">Select Course Section:</label>
      <select id="course" name="course" required>
        <option value="">-- Choose Course Section --</option>
        <option value="CSE101-A">CSE101 - Section A</option>
        <option value="CSE101-B">CSE101 - Section B</option>
        <option value="CSE205-A">CSE205 - Section A</option>
      </select>

      <label for="title">Material Title:</label>
      <input type="text" id="title" name="title" placeholder="e.g., Week 1 Lecture Notes" required>

      <label for="file">Upload File:</label>
      <input type="file" id="file" name="file" accept=".pdf,.doc,.docx,.ppt,.pptx,.zip" required>

      <button type="submit">Upload</button>
    </form>
  </div>

  <!-- Uploaded Materials -->
  <div class="form-container">
    <h2>Uploaded Materials</h2>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Course Section</th>
          <th>Title</th>
          <th>File</th>
          <th>Date Uploaded</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <!-- Example  -->
        <tr>
          <td>1</td>
          <td>CSE101-A</td>
          <td>Week 1 Lecture Notes</td>
          <td><a href="uploads/week1.pdf" target="_blank">Download</a></td>
          <td>2025-08-30</td>
          <td><a href="delete_material.php?id=1" style="color:red;">Delete</a></td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
