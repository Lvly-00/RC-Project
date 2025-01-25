import './bootstrap';
document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.scrollable-container');
    const items = document.querySelectorAll('.kabanata-item');

    container.addEventListener('scroll', () => {
        const containerScrollTop = container.scrollTop;
        const containerHeight = container.clientHeight;

        items.forEach((item, index) => {
            const itemTop = item.offsetTop - containerScrollTop;
            const itemHeight = item.clientHeight;

            // Check if the item is in the middle of the visible area
            if (itemTop >= 0 && itemTop + itemHeight <= containerHeight) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });
    });
});

axios.get('/api/leaderboard', {
    headers: {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    }
})
.then(response => console.log(response.data))
.catch(error => console.error('Error:', error));
