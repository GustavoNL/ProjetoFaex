const totalStudentsElment = document.querySelector('.total-students')
async function totalScheduler() {
    let total = await fetch('/api/students')
    total = await total.json()
    totalStudentsElment.innerHTML = total.total_students
}
totalScheduler()