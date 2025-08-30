<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Student Attendance</title>
  <link rel="stylesheet" href="../../css/style.css">
  <style>
    .form-container {
      background: #fff;
      padding: 20px;
      margin: 20px auto;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      max-width: 900px;
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
      margin-top: 20px;
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
    .present {
      color: green;
      font-weight: bold;
    }
    .absent {
      color: red;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <header>
    <h1> Manage Student Attendance</h1>
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
    <h2>Record Attendance</h2>
    <form action="save_attendance.php" method="POST">
      <label for="course">Select Course Section:</label>
      <select id="course" name="course" required>
        <option value="">-- Choose Section --</option>
        <option value="CS-A">Section A</option>
        <option value="CS B">Section B</option>
        <option value="CSE A">Section A</option>
      </select>

      <label for="date">Attendance Date:</label>
      <input type="date" id="date" name="date" required>

      <!-- Student List -->
      <table>
        <thead>
          <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Attendance</th>
          </tr>
        </thead>
        <tbody>
          <!-- Example Rows  -->
          <tr>
            <td>2023001</td>
            <td>hhhhhhhhhh</td>
            <td>
              <input type="checkbox" name="attendance[2023001]" value="Present"> Present
            </td>
          </tr>
          <tr>
            <td>2023002</td>
            <td>Jdddddd</td>
            <td>
              <input type="checkbox" name="attendance[2023002]" value="Present"> Present
            </td>
          </tr>
        </tbody>
      </table>

      <button type="submit">Save Attendance</button>
    </form>
  </div>

  <!-- Attendance History -->
  <div class="form-container">
    <h2>Attendance History</h2>
    <table>
      <thead>
        <tr>
          <th>Date</th>
          <th>Course Section</th>
          <th>Student ID</th>
          <th>Name</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <!-- Example Row -->
        <tr>
          <td>2025-08-30</td>
          <td>CSE101-A</td>
          <td>2023001</td>
          <td>John Doe</td>
          <td class="present">Present</td>
        </tr>
        <tr>
          <td>2025-08-30</td>
          <td>CSE101-A</td>
          <td>2023002</td>
          <td>Jane Smith</td>
          <td class="absent">Absent</td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
