function createCanvas(tab) {
    const canvas = document.getElementById('myChart').getContext('2d');
    // console.log(tab[2][15]['prices'])
    let row1 = [];
    let data1 = [];
    let data2 = [];
    let data3 = [];
    let data4 = [];
    let data5 = [];
    let data6 = [];
    let data7 = [];
    let data8 = [];
    for (let i = 1; i <= 15; i++) {
        if (i >= 2 && i <= 15) {
            row1.push(tab['1'][i]['prices']);
        }
        for (let j = 1; j <= 9; j++) {
            if(i > 1) {
                if (j === 2) {
                    data1.push(tab[j][i]['prices']);
                }
                if (j === 3) {
                    data2.push(tab[j][i]['prices']);
                }
                if (j === 4) {
                    data3.push(tab[j][i]['prices']);
                }
                if (j === 5) {
                    data4.push(tab[j][i]['prices']);
                }
                if (j === 6) {
                    data5.push(tab[j][i]['prices']);
                }
                if (j === 7) {
                    data6.push(tab[j][i]['prices']);
                }
                if (j === 8) {
                    data7.push(tab[j][i]['prices']);
                }
                if (j === 9) {
                    data8.push(tab[j][i]['prices']);
                }
            }
        }
    }

    const myChart = new Chart(canvas, {
        type: 'line',
        data: {
            labels: row1,
            datasets: [
                {
                    label: '50 -',
                    data: data1,
                    borderColor: 'rgb(68, 114, 196)',
                    fill: false
                },
                {
                    label: '50-100',
                    data: data2,
                    borderColor: 'rgb(237, 125, 49)',
                    fill: false
                },
                {
                    label: '100-200',
                    data: data3,
                    borderColor: 'rgb(165, 165, 165)',
                    fill: false
                },
                {
                    label: '200-250',
                    data: data4,
                    borderColor: 'rgb(255, 192, 0)',
                    fill: false
                },
                {
                    label: '250-300',
                    data: data5,
                    borderColor: 'rgb(91, 155, 213)',
                    fill: false
                },
                {
                    label: '300-350',
                    data: data6,
                    borderColor: 'rgb(112, 173, 71)',
                    fill: false
                },
                {
                    label: '350-400',
                    data: data7,
                    borderColor: 'rgb(38, 68, 120)',
                    fill: false
                },
                {
                    label: '400 +',
                    data: data8,
                    borderColor: 'rgb(158, 72, 14)',
                    fill: false
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    stacked: true // Active l'empilement des courbes sur l'axe y
                }
            }
        }
    });
}

function createCanvas2(tab) {
    const canvas = document.getElementById('myChart2').getContext('2d');
    // console.log(tab[2][15]['prices'])
    let row1 = [];
    let data1 = [];
    let data2 = [];
    let data3 = [];
    let data4 = [];
    let data5 = [];
    let data6 = [];
    let data7 = [];
    let data8 = [];
    for (let i = 1; i <= 15; i++) {
        if (i >= 2 && i <= 15) {
            row1.push(tab['1'][i]['prices']);
        }
        for (let j = 11; j <= 19; j++) {
            if(i > 1) {
                if (j === 12) {
                    data1.push(tab[j-10][i]['prices'] * tab[11][i]['prices'] / 12);
                }
                if (j === 13) {
                    data2.push(tab[j-10][i]['prices'] * tab[11][i]['prices'] / 12);
                }
                if (j === 14) {
                    data3.push(tab[j-10][i]['prices'] * tab[11][i]['prices'] / 12);
                }
                if (j === 15) {
                    data4.push(tab[j-10][i]['prices'] * tab[11][i]['prices'] / 12);
                }
                if (j === 16) {
                    data5.push(tab[j-10][i]['prices'] * tab[11][i]['prices'] / 12);
                }
                if (j === 17) {
                    data6.push(tab[j-10][i]['prices'] * tab[11][i]['prices'] / 12);
                }
                if (j === 18) {
                    data7.push(tab[j-10][i]['prices'] * tab[11][i]['prices'] / 12);
                }
                if (j === 19) {
                    data8.push(tab[j-10][i]['prices'] * tab[11][i]['prices'] / 12);
                }
            }
        }
    }

    const myChart = new Chart(canvas, {
        type: 'line',
        data: {
            labels: row1,
            datasets: [
                {
                    label: '50 -',
                    data: data1,
                    borderColor: 'rgb(68, 114, 196)',
                    fill: false
                },
                {
                    label: '50-100',
                    data: data2,
                    borderColor: 'rgb(237, 125, 49)',
                    fill: false
                },
                {
                    label: '100-200',
                    data: data3,
                    borderColor: 'rgb(165, 165, 165)',
                    fill: false
                },
                {
                    label: '200-250',
                    data: data4,
                    borderColor: 'rgb(255, 192, 0)',
                    fill: false
                },
                {
                    label: '250-300',
                    data: data5,
                    borderColor: 'rgb(91, 155, 213)',
                    fill: false
                },
                {
                    label: '300-350',
                    data: data6,
                    borderColor: 'rgb(112, 173, 71)',
                    fill: false
                },
                {
                    label: '350-400',
                    data: data7,
                    borderColor: 'rgb(38, 68, 120)',
                    fill: false
                },
                {
                    label: '400 +',
                    data: data8,
                    borderColor: 'rgb(158, 72, 14)',
                    fill: false
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    stacked: true // Active l'empilement des courbes sur l'axe y
                }
            }
        }
    });
}