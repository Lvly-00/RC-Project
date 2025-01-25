import "./bootstrap";
function saveScore(score) {
    fetch('/api/scores', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + localStorage.getItem('token'), // Add authentication token
        },
        body: JSON.stringify({ score: score })
    })
    .then(response => response.json())
    .then(data => {
        displayLeaderboard();
    })
    .catch(error => console.error('Error:', error));
}

function displayLeaderboard() {
    fetch('/api/leaderboard', {
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token'), // Add authentication token
        }
    })
    .then(response => response.json())
    .then(leaderboard => {
        const leaderboardBody = document.getElementById('leaderboard-body');
        leaderboardBody.innerHTML = '';
        leaderboard.forEach(entry => {
            const row = document.createElement('tr');
            row.innerHTML = `<td>${entry.name}</td><td>${entry.total_score}</td>`;
            leaderboardBody.appendChild(row);
        });
    })
    .catch(error => console.error('Error:', error));
}
axios.get('/api/leaderboard', {
    headers: {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    }
})
.then(response => console.log(response.data))
.catch(error => console.error('Error:', error));

document.addEventListener('DOMContentLoaded', function() {
    const token = localStorage.getItem('token');
    if (!token) {
        console.error('No authentication token found');
        return;
    }

    fetch('/api/leaderboard', {
        headers: {
            'Authorization': 'Bearer ' + token,
        }
    })
    .then(response => {
        if (!response.ok) {
            console.error('Error:', response.status);
            return;
        }
        return response.json();
    })
    .then(leaderboard => {
        console.log('Leaderboard data:', leaderboard);
        const leaderboardBody = document.getElementById('leaderboard-body');
        leaderboardBody.innerHTML = '';
        leaderboard.forEach(entry => {
            const row = document.createElement('tr');
            row.innerHTML = `<td>${entry.name}</td><td>${entry.total_score}</td>`;
            leaderboardBody.appendChild(row);
        });
    })
    .catch(error => console.error('Error:', error));
});
