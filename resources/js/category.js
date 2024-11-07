$(document).ready(function() {
    // Khi nhấn vào nút Edit, hiện form chỉnh sửa
    $('.btn-edit').on('click', function() {
        var categoryId = $(this).data('id');
        $('#edit-form-' + categoryId).slideDown(); // Hiện form chỉnh sửa
    });

    // Khi nhấn vào nút Cancel, ẩn form chỉnh sửa
    $('.btn-cancel').on('click', function() {
        var categoryId = $(this).data('id');
        $('#edit-form-' + categoryId).slideUp(); // Ẩn form chỉnh sửa
    });

    // Xử lý sự kiện submit form chỉnh sửa
    $('form').on('submit', function(e) {
        e.preventDefault(); // Ngăn chặn việc reload trang

        var form = $(this);
        var categoryId = form.attr('id').replace('edit-category-form-', '');
        var formData = form.serialize(); // Lấy dữ liệu từ form

        $.ajax({
            url: '/admin/categories/' + categoryId, // Đường dẫn đến route update
            method: 'PUT',
            data: formData,
            success: function(response) {
                // Cập nhật lại dữ liệu trong bảng sau khi thành công
                $('#category-' + categoryId + ' td:nth-child(2)').text(response.name);
                $('#category-' + categoryId + ' td:nth-child(3)').text(response.created_at);
                $('#category-' + categoryId + ' td:nth-child(4)').text(response.updated_at);

                // Ẩn form chỉnh sửa
                $('#edit-form-' + categoryId).slideUp();
            },
            error: function(response) {
                // Hiển thị lỗi nếu có
                alert('Update failed! Please try again.');
            }
        });
    });
});
