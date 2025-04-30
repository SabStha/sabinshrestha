/**
 * Main application JavaScript for Cybersecurity Career Roadmap
 */
document.addEventListener('DOMContentLoaded', function() {
    // Handle dynamic path loading when client-side navigation is preferred
    document.querySelectorAll('.nav-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            // Only handle click if we want Ajax loading instead of full page loads
            if (this.hasAttribute('data-ajax-load')) {
                e.preventDefault();
                
                document.querySelectorAll('.nav-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                const path = this.getAttribute('href').split('/').pop();
                loadPath(path);
            }
        });
    });
    
    function loadPath(path) {
        const container = document.getElementById('dynamic-content');
        
        // Add fade out effect
        if (container) {
            container.style.opacity = 0;
            
            fetch(`/path/${path}`)
                .then(response => response.text())
                .then(html => {
                    setTimeout(() => {
                        container.innerHTML = html;
                        
                        // Add animation for cards
                        const cards = container.querySelectorAll('.card');
                        cards.forEach((card, index) => {
                            card.style.opacity = 0;
                            card.style.transform = 'translateY(20px)';
                            setTimeout(() => {
                                card.style.transition = 'all 0.3s ease';
                                card.style.opacity = 1;
                                card.style.transform = 'translateY(0)';
                            }, 100 * index);
                        });
                        
                        container.style.opacity = 1;
                    }, 300);
                })
                .catch(error => {
                    container.innerHTML = `<div class='alert alert-danger'>⚠️ ${error}</div>`;
                    container.style.opacity = 1;
                });
        }
    }
    
    // Add card hover effects
    document.querySelectorAll('.card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px)';
            this.style.boxShadow = '0 15px 30px rgba(0, 240, 255, 0.3)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 10px 20px rgba(0, 240, 255, 0.2)';
        });
    });
    
    // Add glitch effect on headings
    document.querySelectorAll('.glitch-title').forEach(title => {
        title.addEventListener('mouseenter', function() {
            this.classList.add('glitch-active');
        });
        
        title.addEventListener('mouseleave', function() {
            this.classList.remove('glitch-active');
        });
    });
});