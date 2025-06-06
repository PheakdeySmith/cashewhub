// Ensure all containers are cleared before rendering
const clearAndRenderGrid = (containerId, gridConfig) => {
    const container = document.getElementById(containerId);
    if (container) {
        container.innerHTML = ""; // Clear the container
        new gridjs.Grid(gridConfig).render(container);
    }
};

// Update all grid initializations
clearAndRenderGrid("table-gridjs", {
    columns: [
        { name: "ID", width: "80px", formatter: e => gridjs.html('<span class="fw-semibold">' + e + "</span>") },
        { name: "Name", width: "150px" },
        { name: "Email", width: "220px", formatter: e => gridjs.html('<a href="">' + e + "</a>") },
        { name: "Position", width: "250px" },
        { name: "Company", width: "180px" },
        { name: "Country", width: "180px" }
    ],
    pagination: { limit: 5 },
    sort: true,
    search: true,
    data: [
        ["11", "John", "john@example.com", "Developer", "ABC Corp", "USA"],
        ["12", "Jane", "jane@example.com", "Designer", "XYZ Inc", "Canada"],
        ["13", "Alice", "alice@example.com", "Manager", "123 Company", "Australia"],
        ["14", "Bob", "bob@example.com", "Engineer", "456 Ltd", "UK"],
        ["15", "Eve", "eve@example.com", "Analyst", "789 Enterprises", "France"],
        ["16", "Charlie", "charlie@example.com", "Consultant", "Hello World", "Germany"],
        ["17", "David", "david@example.com", "Architect", "Goodbye World", "Japan"],
        ["18", "Grace", "grace@example.com", "Programmer", "Foo Bar", "China"],
        ["19", "Heather", "heather@example.com", "Supervisor", "Baz Qux", "Brazil"],
        ["20", "Isaac", "isaac@example.com", "Administrator", "Fizz Buzz", "India"]
    ]
});

clearAndRenderGrid("table-pagination", {
    columns: [
        { name: "ID", width: "80px", formatter: e => gridjs.html('<span class="fw-semibold">' + e + "</span>") },
        { name: "Name", width: "150px" },
        { name: "Email", width: "220px", formatter: e => gridjs.html('<a href="">' + e + "</a>") },
        { name: "Position", width: "250px" },
        { name: "Company", width: "180px" },
        { name: "Country", width: "180px" }
    ],
    pagination: { limit: 3 },
    data: [
        ["11", "John", "john@example.com", "Developer", "ABC Corp", "USA"],
        ["12", "Jane", "jane@example.com", "Designer", "XYZ Inc", "Canada"],
        ["13", "Alice", "alice@example.com", "Manager", "123 Company", "Australia"],
        ["14", "Bob", "bob@example.com", "Engineer", "456 Ltd", "UK"],
        ["15", "Eve", "eve@example.com", "Analyst", "789 Enterprises", "France"],
        ["16", "Charlie", "charlie@example.com", "Consultant", "Hello World", "Germany"],
        ["17", "David", "david@example.com", "Architect", "Goodbye World", "Japan"],
        ["18", "Grace", "grace@example.com", "Programmer", "Foo Bar", "China"],
        ["19", "Heather", "heather@example.com", "Supervisor", "Baz Qux", "Brazil"],
        ["20", "Isaac", "isaac@example.com", "Administrator", "Fizz Buzz", "India"]
    ]
});

clearAndRenderGrid("table-search", {
    columns: [
        { name: "Name", width: "150px" },
        { name: "Email", width: "250px" },
        { name: "Position", width: "250px" },
        { name: "Company", width: "250px" },
        { name: "Country", width: "150px" }
    ],
    pagination: { limit: 5 },
    search: true,
    data: [
        ["John", "john@example.com", "Developer", "ABC Corp", "USA"],
        ["Jane", "jane@example.com", "Designer", "XYZ Inc", "Canada"],
        ["Alice", "alice@example.com", "Manager", "123 Company", "Australia"],
        ["Bob", "bob@example.com", "Engineer", "456 Ltd", "UK"],
        ["Eve", "eve@example.com", "Analyst", "789 Enterprises", "France"],
        ["Charlie", "charlie@example.com", "Consultant", "Hello World", "Germany"],
        ["David", "david@example.com", "Architect", "Goodbye World", "Japan"],
        ["Grace", "grace@example.com", "Programmer", "Foo Bar", "China"],
        ["Heather", "heather@example.com", "Supervisor", "Baz Qux", "Brazil"],
        ["Isaac", "isaac@example.com", "Administrator", "Fizz Buzz", "India"]
    ]
});

clearAndRenderGrid("table-sorting", {
    columns: [
        { name: "Name", width: "150px" },
        { name: "Email", width: "250px" },
        { name: "Position", width: "250px" },
        { name: "Company", width: "250px" },
        { name: "Country", width: "150px" }
    ],
    pagination: { limit: 5 },
    sort: true,
    data: [
        ["John", "john@example.com", "Developer", "ABC Corp", "USA"],
        ["Jane", "jane@example.com", "Designer", "XYZ Inc", "Canada"],
        ["Alice", "alice@example.com", "Manager", "123 Company", "Australia"],
        ["Bob", "bob@example.com", "Engineer", "456 Ltd", "UK"],
        ["Eve", "eve@example.com", "Analyst", "789 Enterprises", "France"],
        ["Charlie", "charlie@example.com", "Consultant", "Hello World", "Germany"],
        ["David", "david@example.com", "Architect", "Goodbye World", "Japan"],
        ["Grace", "grace@example.com", "Programmer", "Foo Bar", "China"],
        ["Heather", "heather@example.com", "Supervisor", "Baz Qux", "Brazil"],
        ["Isaac", "isaac@example.com", "Administrator", "Fizz Buzz", "India"]
    ]
});

clearAndRenderGrid("table-loading-state", {
    columns: [
        { name: "Name", width: "150px" },
        { name: "Email", width: "250px" },
        { name: "Position", width: "250px" },
        { name: "Company", width: "250px" },
        { name: "Country", width: "150px" }
    ],
    pagination: { limit: 5 },
    sort: true,
    data: function () {
        return new Promise(function (resolve) {
            setTimeout(function () {
                resolve([
                    ["John", "john@example.com", "Developer", "ABC Corp", "USA"],
                    ["Jane", "jane@example.com", "Designer", "XYZ Inc", "Canada"],
                    ["Alice", "alice@example.com", "Manager", "123 Company", "Australia"],
                    ["Bob", "bob@example.com", "Engineer", "456 Ltd", "UK"],
                    ["Eve", "eve@example.com", "Analyst", "789 Enterprises", "France"],
                    ["Charlie", "charlie@example.com", "Consultant", "Hello World", "Germany"],
                    ["David", "david@example.com", "Architect", "Goodbye World", "Japan"],
                    ["Grace", "grace@example.com", "Programmer", "Foo Bar", "China"],
                    ["Heather", "heather@example.com", "Supervisor", "Baz Qux", "Brazil"],
                    ["Isaac", "isaac@example.com", "Administrator", "Fizz Buzz", "India"]
                ]);
            }, 2000);
        });
    }
});

clearAndRenderGrid("table-fixed-header", {
    columns: [
        { name: "Name", width: "150px" },
        { name: "Email", width: "250px" },
        { name: "Position", width: "250px" },
        { name: "Company", width: "250px" },
        { name: "Country", width: "150px" }
    ],
    sort: true,
    pagination: true,
    fixedHeader: true,
    height: "400px",
    data: [
        ["John", "john@example.com", "Developer", "ABC Corp", "USA"],
        ["Jane", "jane@example.com", "Designer", "XYZ Inc", "Canada"],
        ["Alice", "alice@example.com", "Manager", "123 Company", "Australia"],
        ["Bob", "bob@example.com", "Engineer", "456 Ltd", "UK"],
        ["Eve", "eve@example.com", "Analyst", "789 Enterprises", "France"],
        ["Charlie", "charlie@example.com", "Consultant", "Hello World", "Germany"],
        ["David", "david@example.com", "Architect", "Goodbye World", "Japan"],
        ["Grace", "grace@example.com", "Programmer", "Foo Bar", "China"],
        ["Heather", "heather@example.com", "Supervisor", "Baz Qux", "Brazil"],
        ["Isaac", "isaac@example.com", "Administrator", "Fizz Buzz", "India"]
    ]
});

clearAndRenderGrid("table-hidden-column", {
    columns: [
        { name: "Name", width: "120px" },
        { name: "Email", width: "250px" },
        { name: "Position", width: "250px" },
        { name: "Company", width: "250px" },
        { name: "Country", hidden: true }
    ],
    pagination: { limit: 5 },
    sort: true,
    data: [
        ["John", "john@example.com", "Developer", "ABC Corp", "USA"],
        ["Jane", "jane@example.com", "Designer", "XYZ Inc", "Canada"],
        ["Alice", "alice@example.com", "Manager", "123 Company", "Australia"],
        ["Bob", "bob@example.com", "Engineer", "456 Ltd", "UK"],
        ["Eve", "eve@example.com", "Analyst", "789 Enterprises", "France"],
        ["Charlie", "charlie@example.com", "Consultant", "Hello World", "Germany"],
        ["David", "david@example.com", "Architect", "Goodbye World", "Japan"],
        ["Grace", "grace@example.com", "Programmer", "Foo Bar", "China"],
        ["Heather", "heather@example.com", "Supervisor", "Baz Qux", "Brazil"],
        ["Isaac", "isaac@example.com", "Administrator", "Fizz Buzz", "India"]
    ]
});
