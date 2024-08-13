// Dashboard
async function patients() {
    axios
        .post("/patient_data")
        .then(function (response) {
            $("#patient_data").empty();
            const responseData = response.data.data;
            responseData.forEach((patient) => {
                const patientRow = ` <tr>
                                <td>${patient.updated_date_ist}</td>
                <td><a href="/patient-details/${patient.id}">${patient.full_name}</a></td>
                <td><div class="spinner-grow text-danger" role="status">
  <span class="visually-hidden">Loading...</span>
</div></td>
                <td>${patient.condition}</td>
                <td>${patient.phone}</td>            
                <td>${patient.phone}</td>
                <td><i class="fa fa-map-marker" style="font-size:30px;color:red"></i></td>
                <td>${patient.latest_battery_percentage.value} %</td>
                <td>${patient.watch_data.connection_status}</td>

                
            </tr>`;
                // Append data
                $("#patient_data").append(patientRow);
            });
        })
        .catch(function (error) {
            console.log(error);
        });
}
