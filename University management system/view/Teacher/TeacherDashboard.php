<!DOCTYPE html>
<html>
<head>
 
  <title>Teacher Dashboard</title>
  <link rel="stylesheet" href="../../css/style.css">
  <style>
    .form-container {
      background: #fff;
      padding: 20px;
      margin: 20px auto;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      max-width: 600px;
    }
    .form-container h2 {
      margin-bottom: 15px;
      text-align: center;
      color: #3b5998;
    }
    .form-container label {
      font-weight: bold;
    }
    .form-container textarea {
      width: 100%;
      height: 100px;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      resize: none;
    }
    .form-container select,
    .form-container input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      border-radius: 6px;
      border: 1px solid #ccc;
    }
    .form-container button {
      background: #3b5998;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      width: 100%;
    }
    .form-container button:hover {
      background: #2c3e50;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <h1>Teacher Dashboard</h1>
    <div class="search-box">
      <input type="text" placeholder="Search...">
      <button>Search</button>
    </div>
  </header>

  <!-- Sidebar -->
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

  <!-- Main Content -->
  <div class="content">
    
    <!-- Manage Course Materials -->
    <div class="form-container">
      <h2>Upload Course Materials</h2>
      <form action="upload_materials.php" method="POST" enctype="multipart/form-data">
        <label for="course">Select Course:</label>
        <select id="course" name="course" required>
          <option value="">-- Choose Course --</option>
          <option value="CSE101">CSE101 - Programming</option>
          <option value="CSE205">CSE205 - Data Structures</option>
        </select>
        <label for="file">Upload File:</label>
        <input type="file" id="file" name="file" required>
        <button type="submit">Upload</button>
      </form>
    </div>

    <!-- Manage Attendance -->
    <div class="form-container">
      <h2>Manage Student Attendance</h2>
      <form action="attendance.php" method="POST">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        <label for="course_att">Course:</label>
        <select id="course_att" name="course_att" required>
          <option value="">-- Select Course --</option>
          <option value="CSE101">CSE101 - Programming</option>
          <option value="CSE205">CSE205 - Data Structures</option>
        </select>
        <button type="submit">Mark Attendance</button>
      </form>
    </div>

    <!-- Submit Grades -->
    <div class="form-container">
      <h2>Submit Final Grades</h2>
      <form action="submit_grades.php" method="POST">
        <label for="student_id">Student ID:</label>
        <input type="text" id="student_id" name="student_id" required>
        <label for="grade">Final Grade:</label>
        <input type="text" id="grade" name="grade" placeholder="e.g., A, B+" required>
        <button type="submit">Submit Grade</button>
      </form>
    </div>

    <!-- Approve Leave Requests -->
    <div class="form-container">
      <h2>Approve Student Leave Requests</h2>
      <form action="approve_leave.php" method="POST">
        <label for="request_id">Leave Request ID:</label>
        <input type="text" id="request_id" name="request_id" required>
        <label for="decision">Decision:</label>
        <select id="decision" name="decision" required>
          <option value="">-- Select --</option>
          <option value="approve">Approve</option>
          <option value="reject">Reject</option>
        </select>
        <button type="submit">Submit Decision</button>
      </form>
    </div>

  </div>
</body>
</html>
