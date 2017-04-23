var iframe = document.getElementById('frame');

function studentsURL()
{
    iframe.src = 'view_students.php';
}

function parentProfileURL() {
    iframe.src = 'pdash/profile.php';
}

function wardURL() {
    iframe.src = 'pdash/ward.php';
}

function financialURL() {
    iframe.src = 'pdash/financial.php';
}

function teacherURL() {
    iframe.src = 'pdash/teacher.php';
}