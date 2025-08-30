<!DOCTYPE html>
<html>
<head>
  
  <title> Set Consulting Hours</title>
   <link rel="stylesheet"  href="../../css/style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f6fa;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 700px;
      margin: 40px auto;
      background: #fff;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      color: #3b5998;
      margin-bottom: 20px;
    }
    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    label {
      font-weight: bold;
    }
    select, input {
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 100%;
    }
    .btn {
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
    }
    .btn-add {
      background: #3b5998;
      color: white;
    }
    .btn-add:hover {
      background: #2d4373;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: center;
    }
    th {
      background: #3b5998;
      color: white;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Set Consulting Hours</h2>


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


    <!-- Consulting Hours Form -->
    <form id="consultForm" onsubmit="addConsultingHour(event)">
      <label for="day">Day of Week:</label>
      <select id="day" name="day" required>
        <option value="">-- Select Day --</option>
        <option>Sunday</option>
        <option>Monday</option>
        <option>Tuesday</option>
        <option>Wednesday</option>
        <option>Thursday</option>
        <option>Friday</option>
        <option>Saturday</option>
      </select>

      <label for="start">Start Time:</label>
      <input type="time" id="start" name="start" required>

      <label for="end">End Time:</label>
      <input type="time" id="end" name="end" required>

      <button type="submit" class="btn btn-add">Add Consulting Hour</button>
    </form>

    <!-- Table to Show Existing Consulting Hours -->
    <table id="consultTable">
      <thead>
        <tr>
          <th>Day</th>
          <th>Start Time</th>
          <th>End Time</th>
        </tr>
      </thead>
      <tbody>
        <!-- Dynamic Rows  -->
      </tbody>
    </table>
  </div>

  
</body>
</html>
