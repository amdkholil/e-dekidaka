var chart = c3.generate({
    bindto:"#chart1",
    data: {
        columns: [
            ['LOR', 78],
            ['BM', 10],
            ['NG', 5],
            ['Others', 7],
        ],
        type: 'bar',
        groups: [
            ['Others', 'NG', 'BM', 'LOR']
        ],
        order: null
    },
    axis: {
        y: {
            padding: {top:0, bottom:0},
            min: 0,
            max: 100,
        }
    }
});