
<!DOCTYPE html>
<html>
<head>
	<title>Invoice</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		.header {
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 20px;
			background-color: #f2f2f2;
			border-bottom: 2px solid #ddd;
		}

		.header img {
			height: 80px;
		}

		.invoice-details {
			padding: 20px;
			background-color: #fff;
		}

		.invoice-details h1 {
			font-size: 32px;
			margin-bottom: 20px;
		}

		.invoice-details h2 {
			font-size: 18px;
			margin-bottom: 10px;
		}

		.invoice-details table {
			border-collapse: collapse;
			width: 100%;
		}

		.invoice-details th,
		.invoice-details td {
			border: 1px solid #ddd;
			padding: 10px;
			text-align: left;
		}

		.invoice-details th {
			background-color: #f2f2f2;
		}

		.total {
			padding: 20px;
			background-color: #f2f2f2;
			text-align: right;
			font-weight: bold;
		}

	</style>
</head>
<body>
	<div class="header">
		<h1 style="text-align: center;">Kwintansi</h1>
	</div>
	<div class="invoice-details">
		<h4>Nama Konsumen: {{$namauser}}</h4>
		<h4>Tanggal Berangkat: {{$tanggalberangkat}}</h4>
		<table>
			<thead>
				<tr>
					<th>Nama Tour</th>
					<th>Nama User</th>
					<th>Durasi Tour</th>
					<th>Harga per/pax</th>
					<th>Tanggal Berangkat</th>		
					<th>Jumlah Orang</th>		
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$namatour}}</td>
					<td>{{$namauser}}</td>
					<td>{{$durasi}}</td>
					<td>{{$hargasatuan }}</td>
					<td>{{$tanggalberangkat}}</td>
					<td>{{$jumlahorang}}</td>
					
				</tr>
			</tbody>
		</table>
	</div>
	<div class="total">
		Total: RP.{{$hargatotal}}
	</div>
    <script>
        function updateHargaTotal() {
            const jumlahOrang = parseInt(document.getElementById('jumlahorang').value);
            const hargaSatuan = parseInt(document.getElementById('hargasatuan').value);
            const hargaTotal = isNaN(jumlahOrang) || isNaN(hargaSatuan) ? '' : jumlahOrang * hargaSatuan;
            document.getElementById('hargatotal').value = hargaTotal;
        }
    </script>
</body>
</html>
