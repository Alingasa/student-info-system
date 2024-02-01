<style>
  .teamCard {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin: 20px;
      padding: 20px;
      padding-right: 70px; 
      max-width: 400px;
      transition: box-shadow 0.3s ease; 
  }

  .teamCard:hover {
      box-shadow: 0 8px 16px rgba(0, 0, 0, 20); 
  }

  .teamLogo {
      max-width: 100%;
      height: auto;
  }

  .indicator {
      display: inline-block;
      padding: 5px 10px;
      border-radius: 5px;
      color: #fff;
      font-size: 12px;
      font-weight: bold;
      margin-top: 10px;
  }

  .indicator-green {
      background-color: #28a745;
  }

  .indicator-red {
      background-color: #dc3545;
  }
</style>
</head>

<body>

<div class="site-section" id="integration">
  <div class="container">
      <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
              <h2 class="section-title">System Integration</h2>
              <h3 class="text-primary">Teams</h3>
              <div id="apiDataContainer">
                
              </div>
          </div>
      </div>
  </div>
</div>
<script>
  const apiUrl = 'https://api.squiggle.com.au/?q=teams';

  fetch(apiUrl)
      .then(response => {
         
          if (!response.ok) {
              throw new Error(`HTTP error! Status: ${response.status}`);
          }

       
          return response.json();
      })
      .then(data => {
 
          const apiDataContainer = document.getElementById('apiDataContainer');

          data.teams.forEach(team => {
              const teamCard = document.createElement('div');
              teamCard.classList.add('teamCard');

              const teamName = document.createElement('p');
              teamName.innerHTML = `<strong>Team Name:</strong> ${team.name}`;
              teamCard.appendChild(teamName);

              if (team.abbrev) {
                  const teamAbbrev = document.createElement('p');
                  teamAbbrev.innerHTML = `<strong>Abbreviation:</strong> ${team.abbrev}`;
                  teamCard.appendChild(teamAbbrev);
              }

              const debutYear = document.createElement('p');
              debutYear.innerHTML = `<strong>Debut Year:</strong> ${team.debut}`;
              teamCard.appendChild(debutYear);

              const retirementYear = document.createElement('p');
              retirementYear.innerHTML = `<strong>Retirement Year:</strong> ${team.retirement}`;
              teamCard.appendChild(retirementYear);

              apiDataContainer.appendChild(teamCard);
          });
      })
      .catch(error => {
       
          console.error('Fetch error:', error);
      });
</script>

</body>
