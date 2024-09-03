<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Card</title>
    <!-- Bootstrap 3 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        /* Watermark CSS */
        .watermark {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.1;
            z-index: -1;
            width: 80%;
            height: auto;
        }

        /* Print button styling */
        .print-button {
            margin: 20px 0;
        }

        /* Hide the print button when printing */
        @media print {
            .print-button {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>Student Report Card</h1>
                <p>Academic Year: 2024-2025</p>
            </div>
        </div>

        <!-- Watermark -->
        <img src="watermark.png" class="watermark" alt="Watermark Image">

        <div class="row">
            <div class="col-xs-6">
                <p><strong>Student Name:</strong> John Doe</p>
                <p><strong>Class:</strong> 10</p>
            </div>
            <div class="col-xs-6 text-right">
                <p><strong>Roll Number:</strong> 12345</p>
                <p><strong>Date of Birth:</strong> 01-Jan-2008</p>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Marks Obtained</th>
                    <th>Total Marks</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mathematics</td>
                    <td>90</td>
                    <td>100</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Science</td>
                    <td>85</td>
                    <td>100</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>English</td>
                    <td>88</td>
                    <td>100</td>
                    <td>A</td>
                </tr>
                <!-- Add more subjects as needed -->
            </tbody>
        </table>

        <div class="row">
            <div class="col-xs-12 text-center">
                <p><strong>Overall Grade:</strong> A</p>
                <p><strong>Remarks:</strong> Excellent Performance!</p>
            </div>
        </div>

        <!-- Print Button -->
        <div class="row print-button">
            <div class="col-xs-12 text-center">
                <button class="btn btn-primary" onclick="window.print()">Print Report Card</button>
            </div>
        </div>
    </div>
</body>
</html>

