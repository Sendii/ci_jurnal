<div class="modal" tabindex="-1" role="dialog" id="detail">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Produksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <h6>BOP</h6>
                    <table class="table table-stripped table-bordered">
                        <tr>
                            <th>BOP</th>
                            <th>Qty</th>
                            <th>Nominal</th>
                            <th>Subtotal</th>
                        </tr>
                        <?php foreach ($bop as $key => $value) { ?>
                        <tr>
                            <td><?= $value->nama_bahanbaku?></td>
                            <td><?= $value->qty?></td>
                            <td><?= $value->nominal?></td>
                            <td><?= $value->total?></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>