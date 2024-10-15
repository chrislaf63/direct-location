document.addEventListener('DOMContentLoaded', function () {
    const regionSelect = document.getElementById('region-select');
    const departmentSelect = document.getElementById('department-select');
    const citySelect = document.getElementById('city-select');

    if (regionSelect) {
        regionSelect.addEventListener('change', function () {
            const regionId = this.value;
            console.log(`Selected region ID: ${regionId}`);

            if (regionId) {
                fetch(`/regions/${regionId}/departments`)
                    .then(response => response.json())
                    .then(data => {
                        console.log('Departments data:', data);
                        if (Array.isArray(data)) {
                            departmentSelect.innerHTML = '<option value="">Sélectionnez un département</option>';
                            data.forEach(departement => {
                                departmentSelect.innerHTML += `<option value="${departement.id}">${departement.name}</option>`;
                            });
                            departmentSelect.disabled = false;
                            citySelect.disabled = true;
                            citySelect.innerHTML = '<option value="">Sélectionnez une ville</option>';
                        } else {
                            console.error('Expected an array of departments');
                        }
                    })
                    .catch(error => console.error('Error fetching departments:', error));
            } else {
                departmentSelect.disabled = true;
                citySelect.disabled = true;
            }
        });
    }

    // if (departmentSelect) {
    //     departmentSelect.addEventListener('change', function () {
    //         const departmentId = this.value;
    //         console.log(`Selected department ID: ${departmentId}`);
    //
    //         if (departmentId) {
    //             fetch(`/departments/${departmentId}/cities`)
    //                 .then(response => response.json())
    //                 .then(data => {
    //                     console.log('Cities data:', data);
    //                     if (Array.isArray(data)) {
    //                         citySelect.innerHTML = '<option value="">Sélectionnez une ville</option>';
    //                         data.forEach(city => {
    //                             citySelect.innerHTML += `<option value="${city.id}">${city.name}</option>`;
    //                         });
    //                         citySelect.disabled = false;
    //                     } else {
    //                         console.error('Expected an array of cities');
    //                     }
    //                 })
    //                 .catch(error => console.error('Error fetching cities:', error));
    //         } else {
    //             citySelect.disabled = true;
    //         }
    //     });
    // }
});
