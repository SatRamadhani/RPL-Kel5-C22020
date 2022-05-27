/* Number counting. */

let num = document.querySelectorAll(".card-body");
let interval = 2500;

num.forEach((numValue) => 
{
    let start = 0;
    let end = parseInt(numValue.getAttribute("data-val"));
    let duration = Math.floor(interval / end);

    if(end != 0)
    {
        let counter = setInterval(function ()
        {
            start += 1;
            numValue.textContent = start;
            if(start == end)
            {
                clearInterval(counter);
            }
        }, duration);
    }
});

/* Visitor per Hour graph. */

const vphCanvas = document.getElementById("vph");
const vphX = ["00", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11",
              "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23"]; 

let vphData =
{
    label: "Jumlah Pengunjung per Jam",
    data: [12, 12, 18, 17, 100, 2],

    borderColor: "#8946E4"
};

let vphBar = new Chart(vphCanvas,
{
    type: 'line',
    data:
    {
        labels: vphX,
        datasets: [vphData]
    },
    options:
    {
        legend: { display: false },
        title:
        {
            display: false
        }
    }
});

/* Visitor per Day graph. */

const vpdCanvas = document.getElementById("vpd");
const vpdX = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"]; 

let vpdData =
{
    label: "Jumlah Pengunjung per Hari",
    data: [12, 12, 18, 17, 100, 2],

    borderColor: "#007BFF"
};

let barChart = new Chart(vpdCanvas,
{
    type: 'line',
    data:
    {
        labels: vpdX,
        datasets: [vpdData]
    },
    options:
    {
        legend: { display: false },
        title:
        {
            display: false
        }
    }
});