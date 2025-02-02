<!-- <?php
include "sql/display_msg.php"; // Include messages for feedback
include "config.php"; // Database connection file

// Handle form submissions for new achievements
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $achievement = $_POST['achievement'];
    $photo = $_FILES['photo']['name'];
    $target_dir = "assets/image/uploads/achievements/";
    $target_file = $target_dir . basename($photo);

    // Upload file
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
        $sql = "INSERT INTO achievements (name, achievement, photo) VALUES (?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sss", $name, $achievement, $photo);
        if ($stmt->execute()) {
            echo "<script>alert('Achievement added successfully!');</script>";
        } else {
            echo "<script>alert('Error adding achievement.');</script>";
        }
    } else {
        echo "<script>alert('Failed to upload photo.');</script>";
    }
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">assignment</i>
                </div>
                <h4 class="card-title">Achievements</h4>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="achievement">Achievement</label>
                        <textarea class="form-control" name="achievement" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" name="photo" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Achievement</button>
                </form>

                <br><br>
                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Achievement</th>
                                <th>Photo</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT id, name, achievement, photo FROM achievements ORDER BY id DESC";
                            $result = $con->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['achievement']}</td>
                                    <td><img src='assets/image/uploads/achievements/{$row['photo']}' alt='Photo' style='width:100px;height:100px;'></td>
                                    <td class='td-actions text-right'>
                                        <a href='sql/delete.php?del_id={$row['id']}' onclick='return confirm(\"Are you sure?\");' class='btn btn-danger'>
                                            <i class='material-icons'>close</i>
                                        </a>
                                    </td>
                                </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> -->
