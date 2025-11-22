        function fetchData() {
            fetch('https://octect-read.vercel.app/whot.php')
                .then(response => response.text())
                .then(html => {
                    document.getElementById('demo').innerHTML = html;
                })
                .catch(error => console.error('Error fetching data:', error));
        }
        window.onload = fetchData;