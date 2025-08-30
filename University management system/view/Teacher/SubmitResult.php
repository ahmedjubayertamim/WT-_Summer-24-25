<!DOCTYPE html>
<html>
<head>
  
  <title>Submit Final Grades</title>
  <link rel="stylesheet" href="../../css/style.css">
  <style>
    .form-container {
      background: #fff;
      padding: 20px;
      margin: 20px auto;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      max-width: 1000px;
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
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      width: 100%;
      margin-top: 5px;
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
    .published {
      color: green;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <header>
    <h1>TSubmit Final Results</h1>
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
    <h2>Set Grade Weight Distribution</h2>
    <form action="save_grades.php" method="POST">
      <label for="course">Select Course Section:</label>
      <select id="course" name="course" required>
        <option value="">-- Choose Section --</option>
        <option value="CSE101-A">CSE101 - Section A</option>
        <option value="CSE205-A">CSE205 - Section A</option>
      </select>

      <label>Attendance Weight (%)</label>
      <input type="number" name="attendance_weight" min="0" max="100" value="10" required>

      <label>Performance Weight (%)</label>
      <input type="number" name="performance_weight" min="0" max="100" value="10" required>

      <label>Mid Exam Weight (%)</label>
      <input type="number" name="mid_weight" min="0" max="100" value="30" required>

      <label>Final Exam Weight (%)</label>
      <input type="number" name="final_weight" min="0" max="100" value="50" required>

      <!-- Student Marks Entry -->
      <table>
        <thead>
          <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Attendance (100)</th>
            <th>Performance (100)</th>
            <th>Mid Exam (100)</th>
            <th>Final Exam (100)</th>
            <th>Total (%)</th>
          </tr>
        </thead>
        <tbody>
          <!-- Example Rows -->
          <tr>
            <td>2023001</td>
            <td>yyyyye</td>
            <td><input type="number" name="marks[2023001][attendance]" min="0" max="100"></td>
            <td><input type="number" name="marks[2023001][performance]" min="0" max="100"></td>
            <td><input type="number" name="marks[2023001][mid]" min="0" max="100"></td>
            <td><input type="number" name="marks[2023001][final]" min="0" max="100"></td>
            <td>—</td>
          </tr>
          <tr>
            <td>2023002</td>
            <td>Jgggh</td>
            <td><input type="number" name="marks[2023002][attendance]" min="0" max="100"></td>
            <td><input type="number" name="marks[2023002][performance]" min="0" max="100"></td>
            <td><input type="number" name="marks[2023002][mid]" min="0" max="100"></td>
            <td><input type="number" name="marks[2023002][final]" min="0" max="100"></td>
            <td>—</td>
          </tr>
        </tbody>
      </table>

      <button type="submit">Calculate & Publish Grades</button>
    </form>
  </div>

  <!-- Published Results Section -->
  <div class="form-container">
    <h2>Published Results</h2>
    <table>
      <thead>
        <tr>
          <th>Course Section</th>
          <th>Student ID</th>
          <th>Name</th>
          <th>Final Score</th>
          <th>Grade</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <!-- Example Published Data -->
        <tr>
          <td>CSE101-A</td>
          <td>2023001</td>
          <td>John Doe</td>
          <td>85</td>
          <td>A</td>
          <td class="published">Published</td>
        </tr>
        <tr>
          <td>CSE101-A</td>
          <td>2023002</td>
          <td>Jane Smith</td>
          <td>72</td>
          <td>B+</td>
          <td class="published">Published</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
