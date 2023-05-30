<script  src="<?php echo base_url()?>/assets/third_party/chart.umd.js"></script>

<script>



    let charts = [] ;
    let ageChart ;
    let genderChart ;
    let sectorChart ;
    let streetChart ;

    let businesslineChart ;


    loadResident();

    let buttonTab = document.querySelectorAll('.btntab');

    [...buttonTab].map(btn=>{
        btn.addEventListener("click",el=>{
            let data = el.target.dataset

            if(data.tab=="resident")
                loadResident();
            if(data.tab=="business")
                loadBusiness();
        })
    })

    console.log(buttonTab);

    async function loadResident()
    {
        await createChart('ageChart','pie',"<?php echo base_url('dashboard/age')?>")
        await createChart('genderChart','pie',"<?php echo base_url('dashboard/gender')?>")

        let options = {
                 plugins: {
                    legend: {
                        display: false,
                        
                    },
                    title: {
                        display: true,
                        // text: 'Population Sector Group',
                        scales:{
                            y: {
                              beginAtZero: true
                            }
                        }
                    }
                }
              };
        await createChart('sectorChart','bar',"<?php echo base_url('dashboard/sector')?>",options)
        await createChart('streetChart','line',"<?php echo base_url('dashboard/street')?>",options)
        // await gender();
        // await sector();
        // await street();
    }

    async function loadBusiness()
    {
        await business();
        await businessline();
        
    }

    async function createChart(el,cType,url,cOptions = {})
    {
        const response = await fetch(url);
        const jsonData = await response.json();

        console.log(jsonData);

        let labelData  = [];
        let countData  = [];
        let colorData  = [];

        Object.entries(jsonData).forEach(([key, value]) => {
            labelData.push(value.label);
            countData.push(value.count);
            colorData.push(value.color);
        });

        const data = {
          labels: labelData,
          datasets: [{
            data: countData,
            backgroundColor:colorData ,
          }]
        };
        const config = {
          type: cType,
          data: data,
          options:cOptions
        };

        if (charts[el]) charts[el].destroy();
        charts[el] = new Chart(document.getElementById(el),config);

        return await charts[el];
    }

    async function age() 
    {
        return 
    }

    async function gender() 
    {
        const response = await fetch("<?php echo base_url('dashboard/gender')?>");
        const jsonData = await response.json();

        console.log(jsonData);

        const data = {
          labels: ['Male','Female'],
          datasets: [{
            data: [jsonData.male, jsonData.female],
            backgroundColor: ["#b91d47","#00aba9"],
          }]
        };
        const config = {
          type: 'doughnut',
          data: data,
        };

        if (genderChart) genderChart.destroy();
        genderChart = new Chart(document.getElementById('genderChart'),config);

        return await genderChart;
    }

    async function sector() 
    {
        const response = await fetch("<?php echo base_url('dashboard/sector')?>");
        const jsonData = await response.json();

        console.log(jsonData);

        const data = {
          labels: ["Persons with Disabilities","Single Parent","Senior Citizen"],
          datasets: [{
            data: [jsonData.pwd, jsonData.sp,jsonData.senior],
            backgroundColor: ["#b91d47","#00aba9","#00aba8"],
          }]
        };
        const config = {
          type: 'bar',
          data: data,
          options: {
             plugins: {
                legend: {
                    display: false,
                    
                },
                title: {
                    display: true,
                    // text: 'Population Sector Group',
                    scales:{
                        y: {
                          beginAtZero: true
                        }
                    }
                }
            }
          }
        };

        if (sectorChart) sectorChart.destroy();
        sectorChart = new Chart(document.getElementById('sectorChart'),config);

        return await sectorChart;

    }
    

    async function street() 
    {
        const response = await fetch("<?php echo base_url('dashboard/street')?>");
        const jsonData = await response.json();

        console.log(jsonData);

        let streetData = jsonData.street;
        let streetCount = jsonData.count;

        let streetColors = jsonData.color;

        const data = {
            labels: streetData,
            datasets: [{
            backgroundColor: streetColors,
            data: streetCount
            }]
        };
        const config = {
          type: 'line',
          data: data,
          options: {
             plugins: {
                legend: {
                    display: false,
                    
                },
                title: {
                    display: true,
                    // text: 'Population Sector Group',
                    scales:{
                        y: {
                          beginAtZero: true
                        }
                    }
                }
            }
          }
        };

        if (streetChart) streetChart.destroy();
        streetChart = new Chart(document.getElementById('streetChart'),config);

        return await streetChart;

    }
    

    async function business() 
    {
        const response = await fetch("<?php echo base_url('dashboard/business')?>");
        const jsonData = await response.json();
        console.log(jsonData);

        document.getElementById('businessSP').innerHTML   = jsonData.sp
        document.getElementById('businessP').innerHTML    = jsonData.p
        document.getElementById('businessCorp').innerHTML = jsonData.corp
        document.getElementById('businessCoop').innerHTML = jsonData.coop
        return jsonData;
    }

    async function businessline() 
    {
        const response = await fetch("<?php echo base_url('dashboard/business_line')?>");
        const jsonData = await response.json();

        console.log(jsonData);

        let lineBusinessData = jsonData.line;
        let lineBusinessCount = jsonData.count;

        let lineBusinessColors = jsonData.color;

        const data = {
            labels: lineBusinessData,
            datasets: [{
            backgroundColor: lineBusinessColors,
            data: lineBusinessCount
            }]
        };
        const config = {
          type: 'line',
          data: data,
          options: {
             plugins: {
                legend: {
                    display: false,
                    
                },
                title: {
                    display: true,
                    // text: 'Population Sector Group',
                    scales:{
                        y: {
                          beginAtZero: true
                        }
                    }
                }
            }
          }
        };

        if (businesslineChart) businesslineChart.destroy();
        businesslineChart = new Chart(document.getElementById('lineBusinessChart'),config);

        return await businesslineChart;

    }

    //  lineBusiness stats
    // var lineBusinessData = ["Banks", "Import", "Export", "Retail", "Trading", "Wholesale", "Distributor", "Call Center", "Manufacturing" , "Real Estate"];
    // var lineBusinessCount = [30,40,60,70,100,20,45,50,80,90];

    // var lineBusinessColors = ["#b91d47","#00aba9","#b91d47","#00aba9","#b91d47","#00aba9","#b91d47","#00aba9","#b91d47","#00aba9"];


    // new Chart(document.getElementById("lineBusinessChart"), {
    // type: "line",
    // data: {
    //     labels: lineBusinessData,
    //     datasets: [{
    //     backgroundColor: lineBusinessColors,
    //     data: lineBusinessCount
    //     }]
    // },
    // options: {
    //     title: {
    //     display: true,
    //     text: "Line of Business Group"
    //     }
    // }
    // });

    //  lineBusiness stats end 
</script>