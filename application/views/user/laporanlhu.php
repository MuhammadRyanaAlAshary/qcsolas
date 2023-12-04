<!-- Begin Page Content -->
<div class="container-fluid">
    <i class="icofont-angle-double-left"></i>

    <!-- Page Heading -->
    <p style="text-align: center;"><strong><span style='font-size:19px;line-height:115%;font-family:"Times New Roman",serif;'> <?= $title; ?> </span></strong></p>

    <div class="row">
        <div class="col-lg-11">
            <hr>
            <table style="width:490.5pt;border-collapse:collapse;border:none;">
                <?= $i = 1; ?>
                <?php foreach ($datalhu as $dl) : ?>
                    <tbody>
                        <tr>
                            <td style="width: 231.05pt;padding: 0cm 5.4pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>TANGGAL&nbsp;PRODUKSI&nbsp;:&nbsp;<?= $dl['tgl_produksi']; ?></p>
                            </td>
                            <td style="width: 259.45pt;padding: 0cm 5.4pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>NO. ANALISA&nbsp;:&nbsp;<?= $dl['nomer_analisa']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 231.05pt;padding: 0cm 5.4pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>TANGGAL SAMPLING : <?= $dl['tgl_sampling']; ?></p>
                            </td>
                            <td style="width: 259.45pt;padding: 0cm 5.4pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>NO BATCH : <?= $dl['nomer_batch']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 231.05pt;padding: 0cm 5.4pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>KODE PRODUK : <?= $dl['kode_produk']; ?></p>
                            </td>
                            <td style="width: 259.45pt;padding: 0cm 5.4pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>BESARAN BATCH : <?= $dl['besaran_batch']; ?>&nbsp; <?= $dl['satuan']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 231.05pt;padding: 0cm 5.4pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>NAMA SAMPLE : <?= $dl['nama_lhu']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 231.05pt;padding: 0cm 5.4pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>EXP DATE: <?= $dl['exp_date']; ?></p>
                            </td>
                        </tr>
                    </tbody>
            </table>
            <hr>
        </div>
    </div>

    <table style="width:463.3px;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 72.55pt;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>HASIL</p>
                </td>
                <td style="width: 36.8pt;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 19.9pt;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 177.9pt;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 152.5pt;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>: PILIH SALAH SATU</p>
                </td>
            </tr>
            <tr>
                <td style="width: 72.55pt;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 36.8pt;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 19.9pt;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 177.9pt;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 152.5pt;padding: 0cm 5.4pt;vertical-align: top;">
                    <div style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                        <ol style="margin-bottom:0cm;list-style-type: circle;">
                            <li style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>MEMENUHI SYARAT</li>
                        </ol>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="width: 72.55pt;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 36.8pt;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 19.9pt;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 177.9pt;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 152.5pt;padding: 0cm 5.4pt;vertical-align: top;">
                    <div style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                        <ol style="margin-bottom:0cm;list-style-type: circle;">
                            <li style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>TIDAK MEMENUHI SYARAT</li>
                        </ol>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="width: 72.55pt;padding: 0cm 5.4pt;height: 31.95pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>KETERANGAN</p>
                </td>
                <td colspan="4" style="width: 386.7pt;padding: 0cm 5.4pt;height: 31.95pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>:</p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="width:463.3pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width:91.7pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                </td>
                <td style="width:57.95pt;border:solid windowtext 1.0pt;border-left: none;padding:0cm 5.4pt 0cm 5.4pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>TANGGAL</p>
                </td>
                <td style="width:135.75pt;border:solid windowtext 1.0pt;border-left: none;padding:0cm 5.4pt 0cm 5.4pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>TANDA TANGAN</p>
                </td>
                <td style="width:88.95pt;border:solid windowtext 1.0pt;border-left: none;padding:0cm 5.4pt 0cm 5.4pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>INSTRUMEN</p>
                </td>
                <td style="width:88.95pt;border:solid windowtext 1.0pt;border-left: none;padding:0cm 5.4pt 0cm 5.4pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>KOLOM YANG DIGUNAKAN</p>
                </td>
            </tr>
            <tr>
                <td style="width:91.7pt;border:solid windowtext 1.0pt;border-top: none;padding:0cm 5.4pt 0cm 5.4pt;height:65.65pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>DIAJUKAN OLEH</p>
                </td>
                <td style="width:57.95pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:65.65pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                </td>
                <td style="width: 135.75pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 65.65pt;vertical-align: bottom;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><?= $user['name']; ?></p>
                </td>
                <td style="width: 88.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 65.65pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 88.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 65.65pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td style="width:91.7pt;border:solid windowtext 1.0pt;border-top: none;padding:0cm 5.4pt 0cm 5.4pt;height:62.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>ANALIS PEMERIKSA KADAR MASSA</p>
                </td>
                <td style="width:57.95pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:62.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                </td>
                <td style="width:135.75pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:62.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                </td>
                <td style="width: 88.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 62.5pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 88.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 62.5pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td style="width:91.7pt;border:solid windowtext 1.0pt;border-top: none;padding:0cm 5.4pt 0cm 5.4pt;height:62.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>ANALIS PEMERIKSA DISOLUSI</p>
                </td>
                <td style="width:57.95pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:62.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                </td>
                <td style="width:135.75pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:62.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                </td>
                <td style="width: 88.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 62.5pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 88.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 62.5pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td style="width:91.7pt;border:solid windowtext 1.0pt;border-top: none;padding:0cm 5.4pt 0cm 5.4pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>ANALIS PEMERIKSA VOLUME TERPINDAHKAN</p>
                </td>
                <td style="width:57.95pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                </td>
                <td style="width:135.75pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                </td>
                <td style="width: 88.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 88.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td style="width:91.7pt;border:solid windowtext 1.0pt;border-top: none;padding:0cm 5.4pt 0cm 5.4pt;height:76.9pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>DIPERIKSA OLEH</p>
                </td>
                <td style="width:57.95pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:76.9pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                </td>
                <td style="width: 135.75pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.9pt;vertical-align: bottom;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>apt.Resti Permatasari, S.Farm</p>
                </td>
                <td style="width: 88.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.9pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 88.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.9pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->