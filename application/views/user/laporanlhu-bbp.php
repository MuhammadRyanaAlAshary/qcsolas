<?php foreach ($datalhu as $dl) : ?>
</style>

    <table style="float: left;width:160pt;border-collapse:collapse;border:none;margin-left:6.75pt;margin-right:6.75pt;">
    <tbody>
        <tr>
            <td
                style="width: 160pt;border: 1pt solid windowtext;padding: 0cm 5.4pt;height: 30pt;vertical-align: top;">
                <p
                    style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:18.0pt;text-align:center;'>
                    <strong><span style='font-size:11px;font-family:"Arial",sans-serif;'>PT. SOLAS LANGGENG SEJAHTERA</span></strong>
                </p>
                <p
                    style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:18.0pt;text-align:center; padding: 10px;'>
                </p>
            </td>
            <td
                style="width:160pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;height:30pt;">
                <p
                    style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:-.25pt;text-align:center;'>
                    <strong><span style='font-size:13px;font-family:"Arial",sans-serif;'>DAFTAR PERIKSA BAHAN
                            BAKU&nbsp;</span></strong>
                </p>
            </td>
            <td
                style="width: 160pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 67.5pt;vertical-align: top;">
                <p
                    style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:-.3pt;line-height:150%;'>
                    <span style='font-size:11px;line-height:150%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:-.3pt;'><span
                        style='font-size:11px;font-family:"Arial",sans-serif;'>04-QPD-003-003</span></p>
                <p style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:-.3pt;'><span
                        style='font-size:11px;font-family:"Arial",sans-serif;'>Revisi : 05</span></p>
                <p style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:-.3pt;'><span
                        style='font-size:11px;font-family:"Arial",sans-serif;'>Tanggal&nbsp;</span><span
                        style='font-size:11px;font-family:"Arial",sans-serif;'>Berlaku :&nbsp;</span></p>
                <p style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:-.3pt;'><span
                        style='font-size:11px;font-family:"Arial",sans-serif;'><?= $dl['tgl_sampling']; ?></span></p>
            </td>
        </tr>
    </tbody>
</table>
<div style="padding: 10px">
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>Tanggal Sampling&nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: <?= $dl['tgl_sampling']; ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>Nama Bahan Baku&nbsp; &nbsp; &nbsp;
        &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: <?= $dl['produk_name']; ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>No. Batch&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : <?= $dl['nomer_batch']; ?>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>Exp.Date&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : <?= $dl['exp_date']; ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>Produsen&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : <?= $dl['produsen']; ?>
        &nbsp; &nbsp; &nbsp; &nbsp;</span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>Supplier&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp;&nbsp; : <?= $dl['supplier']; ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>Jumlah Penerimaan&nbsp; &nbsp; &nbsp;
        &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?= $dl['jumlah_penerimaan']; ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>No. Analisa&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : <?= $dl['nomer_analisa']; ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>No. Protap Analisa Bahan Baku : <?= $dl['no_protap_analisa_bb']; ?></span><span
        style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>10RD-012-B</span><span
        style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>P</span><span
        style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>004</span><span
        style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span><span
        style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>Rev. 07 Tanggal Berlaku : <?= $dl['tgl_berlaku']; ?>
        2023</span>
</p>
</div>
<table style="width:10pt;border-collapse:collapse;border:none;">
    <tbody>
        <tr>
            <td style="width:5pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:26.7pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <strong><span
                            style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>No</span></strong>
                </p>
            </td>
            <td
                style="width:5pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.7pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <strong><span
                            style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>PENETAPAN</span></strong>
                </p>
            </td>
            <td
                style="width:100pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.7pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <strong><span
                            style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>SPESIFIKASI</span></strong>
                </p>
            </td>
            <td
                style="width:65pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.7pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <strong><span
                            style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>HASIL</span></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width:5pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:18.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>1</span>
                </p>
            </td>
            <td
                style="width:5pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>PEMERIAN</span>
                </p>
            </td>
            <td
                style="width: 100pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 18.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:justify;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>Serbuk sangat halus,
                        putih</span>
                </p>
            </td>
            <td
                style="width:65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 18.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width:5pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:18.85pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>2</span>
                </p>
            </td>
            <td
                style="width:5pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.85pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>KELARUTAN</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width: 100pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 18.85pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>Praktis tidak larut
                        dalam air dingin dan dalam etanol</span>
                </p>
            </td>
            <td
                style="width: 65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 18.85pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width:5pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:48.1pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>3</span>
                </p>
            </td>
            <td
                style="width:5pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:48.1pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>IDENTIFIKASI</span>
                </p>
            </td>
            <td
                style="width:200pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:48.1pt;">
                <div
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <ul style="margin-bottom:0cm;list-style-type: disc;margin-left:-1.6999999999999993px;">
                        <li
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                            <span style='line-height:115%;font-family:"Arial",sans-serif;font-size:13px;'>Identifikasi A
                                : Terbentuk larutan kanji yang encer&nbsp;</span>
                        </li>
                        <li
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                            <span style='line-height:115%;font-family:"Arial",sans-serif;font-size:13px;'>Identifikasi B
                                : Terjadi warna biru tua yang hilang pada pemanasan dan timbul kembali pada
                                pendinginan&nbsp;</span>
                        </li>
                    </ul>
                </div>
            </td>
            <td
                style="width: 65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 48.1pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width:5pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:56.9pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>4</span>
                </p>
            </td>
            <td
                style="width:200pt;;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:56.9pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span
                        style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>Mikroskopik&nbsp;</span>
                </p>
            </td>
            <td
                style="width: 65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 56.9pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>Butir bersegi banyak,
                        bersudut, ukuran 2 &micro;m sampai 23 &micro;m atau butir bulat dengan diameter 25 &micro;m
                        sampai 32 &micro;m. Hilus ditengah berupa rongga yang nyata atau celah berjumlah 2 &nbsp;sampai
                        5; tidak ada lamela. Amati dibawah cahaya terpolarisasi, tampak bentuk silang berwarna hitam,
                        memotong pada hilus</span>
                </p>
            </td>
            <td
                style="width: 65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 56.9pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width:5pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:36.85pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>5</span>
                </p>
            </td>
            <td
                style="width:5pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.85pt;">
                <p
                    style='margin-top:6.0pt;margin-right:0cm;margin-bottom:  0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span
                        style='font-size:13px;line-height:  115%;font-family:"Arial",sans-serif;'>KEASAMAN&nbsp;</span>
                </p>
            </td>
            <td
                style="width:200pt;;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.85pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>Diperlukan tidak lebih
                        dari 2,0 mL</span>
                </p>
            </td>
            <td
                style="width: 65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 36.85pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width:5pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:22.9pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>6</span>
                </p>
            </td>
            <td
                style="width:5pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.9pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>SUSUT
                        PENGERINGAN&nbsp;</span>
                </p>
            </td>
            <td
                style="width:200pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.9pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>Maksimum 15,0 %</span>
                </p>
            </td>
            <td
                style="width:5pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 22.9pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width:5pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:29.3pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>7</span>
                </p>
            </td>
            <td
                style="width:5pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:29.3pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>SISA PEMIJARAN</span>
                </p>
            </td>
            <td
                style="width:200pt;;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:29.3pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>Tidak lebih dari 0,6
                        %</span>
                </p>
            </td>
            <td
                style="width:5pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 29.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width:5pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:29.3pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>8</span>
                </p>
            </td>
            <td
                style="width:5pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:29.3pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>BAHAN ORGANIK
                        ASING</span>
                </p>
            </td>
            <td
                style="width:200pt;;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:29.3pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>Tidak lebih dari
                        sesepora sel</span>
                </p>
            </td>
            <td
                style="width:5pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 29.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width:5pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:29.3pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>9</span>
                </p>
            </td>
            <td
                style="width:5pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:29.3pt;">
                <p
                    style='margin-top:6.0pt;margin-right:0cm;margin-bottom:  0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:  115%;font-family:"Arial",sans-serif;'>MIKROBIOLOGI</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width:200pt;;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:29.3pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>Angka Lempeng Total
                        (ALT) &nbsp; &nbsp;: Tidak lebih dari 1000 cfu/gram</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>Angka Kapang Khamir
                        (AKK) &nbsp; :<em>&nbsp;</em>Tidak lebih dari 100 cfu/gram</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <em><span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>Esherichia
                            coli</span></em><span
                        style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Negatif/gram</span>
                </p>
            </td>
            <td
                style="width: 65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 29.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-indent:36.0pt;'>
    <span style='font-size:13px;font-family:"Arial",sans-serif;'>CATATAN&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp;:
        &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..</span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-indent:36.0pt;'>
    <span style='font-size:13px;font-family:"Arial",sans-serif;'>TANGGAL SELESAI&nbsp; &nbsp; &nbsp;&nbsp;:&nbsp;</span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-indent:36.0pt;'>
    <span style='font-size:13px;font-family:"Arial",sans-serif;'>DISPOSISI&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>DILULUSKAN /
            DITOLAK</strong></span>
</p>
<table style="margin-left:35.1pt;border-collapse:collapse;border:none;">
    <tbody>
        <tr>
            <td style="width:212.4pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <strong><span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>DIPERIKSA
                            OLEH</span></strong>
                </p>
            </td>
            <td style="width:212.95pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <strong><span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>DISETUJUI
                            OLEH</span></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 212.4pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 48.8pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:13px;font-family:  "Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:13px;font-family:  "Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>( <span
                            style="color:white;">Ibrohim Shaleh&nbsp;</span>)</span>
                </p>
            </td>
            <td
                style="width: 212.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 48.8pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:13px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:13px;font-family:  "Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:13px;font-family:  "Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:13px;font-family:  "Arial",sans-serif;'>( <span style="color:white;">Apt.
                            Febby Herdianty S.Farm</span>.,)</span>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<?php endforeach; ?>