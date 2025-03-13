document.getElementById('search').addEventListener('keyup', function() {
    const query = this.value;

    fetch(`/students/search?q=${query}`)
        .then(response => response.json())
        .then(data => {
            const studentsList = document.getElementById('students-list');
            studentsList.innerHTML = '';

            data.forEach(student => {
                const li = document.createElement('li');
                li.textContent = `${student.name} (Age: ${student.age})`;
                li.className = 'p-2 border-b';
                studentsList.appendChild(li);
            });
        });
});
