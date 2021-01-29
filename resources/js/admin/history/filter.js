const emptyRangePicker = name => {
    $(`input[name="${name}"]`).daterangepicker({
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear',
            format: 'DD-MM-YYYY',
        }
    });

    $(`input[name="${name}"]`).on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('DD-MM-YYYY') + ' - ' + picker.endDate.format('DD-MM-YYYY'));
    });

    $(`input[name="${name}"]`).on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('');
    });
}

emptyRangePicker('start_dates');
emptyRangePicker('end_dates');
emptyRangePicker('return_dates');

$('#reset-btn').on('click',() => {
    $(`input[name="keyword"]`).val('');
    $(`input[name="start_dates"]`).val('');
    $(`input[name="end_dates"]`).val('');
    $(`input[name="return_dates"]`).val('');
    $(`select[name="status"]`).val('*');
    $(`select[name="genre"]`).val('*');
});
