<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airplane Ticket Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        .ticket {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: Arial, sans-serif;
        }

        .ticket-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }

        .ticket-content {
            margin-top: 20px;
        }

        .ticket-field {
            margin-bottom: 10px;
        }

        .ticket-label {
            font-weight: bold;
        }

        .ticket-value {
            float: right;
        }

        .ticket-barcode {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Button to Open the Ticket Popup -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ticketModal">
        Open Ticket
    </button>

    <!-- Ticket Modal -->
    <div class="modal fade" id="ticketModal" tabindex="-1" role="dialog" aria-labelledby="ticketModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="ticket">
                    <div class="ticket-header">
                        <h2>Airplane Ticket</h2>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-field">
                            <span class="ticket-label">Flight:</span>
                            <span class="ticket-value">AC123</span>
                        </div>
                        <div class="ticket-field">
                            <span class="ticket-label">From:</span>
                            <span class="ticket-value">New York (JFK)</span>
                        </div>
                        <div class="ticket-field">
                            <span class="ticket-label">To:</span>
                            <span class="ticket-value">London (LHR)</span>
                        </div>
                        <div class="ticket-field">
                            <span class="ticket-label">Departure:</span>
                            <span class="ticket-value">2023-07-15 08:00 AM</span>
                        </div>
                        <div class="ticket-field">
                            <span class="ticket-label">Passenger:</span>
                            <span class="ticket-value">John Doe</span>
                        </div>
                    </div>
                    <div class="ticket-barcode">
                        <img src="barcode.png" alt="Barcode">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
