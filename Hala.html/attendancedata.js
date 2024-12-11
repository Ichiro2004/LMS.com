const attendanceData = {
    "2023-11-01": {
        "21ST CENTURY OF LITERATURE": "Present",
        "TEKBOK": "Absent",
        "PROG5": "Present",
        "PROG6": "Absent",
        "PHYSCIE": "Present",
        "MIL": "Absent",
        "PR2": "Present"
    },
    "2023-11-02": {
        "21ST CENTURY OF LITERATURE": "Absent",
        "TEKBOK": "Present",
        "PROG5": "Absent",
        "PROG6": "Present",
        "PHYSCIE": "Absent",
        "MIL": "Present",
        "PR2": "Absent"
    }
    // Add more attendance data as needed
};

// Save attendance data to localStorage
function saveAttendanceData() {
    localStorage.setItem('attendanceData', JSON.stringify(attendanceData));
}

// Load attendance data from localStorage
function loadAttendanceData() {
    return JSON.parse(localStorage.getItem('attendanceData')) || {};
}

// Call saveAttendanceData on page load to initialize data
document.addEventListener('DOMContentLoaded', saveAttendanceData);