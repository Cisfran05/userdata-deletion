        function fetchData() {
            fetch('https://userdata-deletion.vercel.app/snook.php')
                .then(response => response.text())
                .then(html => {
                    document.getElementById('demo').innerHTML = html;
                })
                .catch(error => console.error('Error fetching data:', error));
        }

        window.onload = fetchData;

