var chart = {
    bindto: "#chart1",
    data: {
        columns: [
            ['LOR', 78.4],
            ['BM', 10.3],
            ['NG', 4.7],
            ['Others', 6.6],
        ],
        type: 'donut',
        groups: [
            ['Others', 'NG', 'BM', 'LOR']
        ],
        order: null
    },
    axis: {
        y: {
            padding: { top: 0, bottom: 0 },
            min: 0,
            max: 100,
        }
    }
}
id1.axis = confAxis

c3.generate(id1);

id1.bindto = "#chart2"
id1.data.columns = [
    ['LOR', 50.1],
    ['BM', 29.9],
    ['NG', 12],
    ['Others', 8],
]
c3.generate(id1);
