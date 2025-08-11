function showDetails(goalNumber) {
            const goals = [
                "Detail lebih lanjut tentang percepatan pemerataan pembangunan infrastruktur dan wilayah perbatasan dengan fokus pada kualitas lingkungan hidup.",
                "Informasi lengkap tentang program peningkatan SDM berbasis nilai agama dan budaya bangsa.",
                "Rincian strategi pertumbuhan ekonomi melalui sektor agraris, pariwisata, dan sektor unggulan lainnya.",
                "Penjelasan tentang reformasi birokrasi menuju pemerintahan yang inovatif, profesional, dan melayani."
            ];
            
            alert(`Tujuan ${goalNumber}:\n\n${goals[goalNumber-1]}`);
        }
        
        // Highlight important words on page load
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.goal-card');
            const keywords = ['Pembangunan', 'SDM', 'Ekonomi', 'Birokrasi', 'Infrastruktur', 'Pariwisata'];
            
            cards.forEach(card => {
                let text = card.innerHTML;
                keywords.forEach(word => {
                    const regex = new RegExp(word, 'g');
                    text = text.replace(regex, `<span class="highlight">${word}</span>`);
                });
                card.innerHTML = text;
            });
        });