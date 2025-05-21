document.addEventListener('DOMContentLoaded', function() {
    const avatarBtn = document.getElementById('avatar-btn');
    const menu = document.getElementById('avatar-menu');
    document.addEventListener('click', function(e) {
        if (avatarBtn.contains(e.target)) {
        menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
        } else if (!menu.contains(e.target)) {
        menu.style.display = 'none';
        }
    });
});