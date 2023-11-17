function addItem() {
    var itemName = document.getElementById("itemName").value;
    var itemPrice = parseFloat(document.getElementById("itemPrice").value);

    if (!isNaN(itemPrice) && itemName.trim() !== "") {
        var itemList = document.getElementById("itemList");
        var li = document.createElement("li");
        li.textContent = itemName + " - Rp " + itemPrice.toFixed(2);
        itemList.appendChild(li);

        var total = parseFloat(document.getElementById("total").textContent);
        total += itemPrice;
        document.getElementById("total").textContent = total.toFixed(2);

        document.getElementById("itemName").value = "";
        document.getElementById("itemPrice").value = "";
    }
}

function calculateChange() {
    var payment = parseFloat(document.getElementById("payment").value);
    var total = parseFloat(document.getElementById("total").textContent);

    if (!isNaN(payment) && payment >= total) {
        var change = payment - total;
        document.getElementById("change").textContent = change.toFixed(2);
    } else {
        alert("Pembayaran tidak valid!");
    }
}
