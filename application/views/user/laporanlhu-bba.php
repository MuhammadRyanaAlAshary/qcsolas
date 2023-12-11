<?php foreach ($datalhu as $dl) : ?>
<table style="float: left;width:100pt;border-collapse:collapse;border:none;margin-left:6.75pt;margin-right:6px;">
    <tbody>
        <tr>
            <td
                style="width:170pt;border: 1pt solid windowtext;padding: 0cm 5.4pt;height: 67.5pt;vertical-align: top;">
                <p
                    style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:18.0pt;text-align:center;'>
                    <strong><span style='font-size:11px;font-family:"Arial",sans-serif;'>PT. SOLAS LANGGENG
                            SEJAHTERA</span></strong>
                </p>
                <p
                    style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:18.0pt;text-align:center; padding: 10px;'>
                </p>
            </td>
            <td
                style="width:170pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;height:67.5pt;">
                <p
                    style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:-.25pt;text-align:center;'>
                    <strong><span style='font-size:16px;font-family:"Arial",sans-serif;'>DAFTAR PERIKSA BAHAN
                            BAKU</span></strong>
                </p>
            </td>
            <td
                style="width:170pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 67.5pt;vertical-align: top;">
                <p
                    style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:-.3pt;line-height:150%;'>
                    <span style='font-size:11px;line-height:  150%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span
                        style='font-size:11px;line-height:115%;font-family:  "Arial",sans-serif;'>04-QPD-003-003</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:11px;line-height:115%;font-family:"Arial",sans-serif;'>Revisi : 06</span>
                </p>
                <p style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:-.3pt;'><span
                        style='font-size:11px;font-family:"Arial",sans-serif;'>Tanggal&nbsp;</span><span
                        style='font-size:11px;font-family:"Arial",sans-serif;'>Berlaku :&nbsp;</span></p>
                <p style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:-.3pt;'><span
                        style='font-size:11px;font-family:"Arial",sans-serif;'><?= $dl['tgl_berlaku'] ?></span></p>
            </td>
        </tr>
    </tbody>
</table>

<div style="margin-left: 10px">
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>Tanggal Sampling&nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;:&nbsp; <?= $dl['tgl_sampling'] ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>Nama Bahan Baku&nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: <?= $dl['produk_name'] ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>No. Batch&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;: <?= $dl['nomer_batch'] ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>Exp.Date&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;: <?= $dl['exp_date'] ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>Produsen&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp;&nbsp; : <?= $dl['produsen'] ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>Supplier&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp;&nbsp; : <?= $dl['supplier'] ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>Jumlah Penerimaan&nbsp; &nbsp; &nbsp;
        &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <?= $dl['jumlah_penerimaan'] ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>No. Analisa&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : <?= $dl['nomer_analisa'] ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>No. Protap Analisa Bahan Baku :
        &nbsp;</span><span
        style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'><?= $dl['no_protap_analisa_bb'] ?></span><span
        style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;Rev. 06 Tanggal Berlaku : <?= $dl['tgl_berlaku'] ?></span>
</p>
</div>
<div
    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <ol start="1" style="margin-bottom:0cm;list-style-type: upper-alpha;">
        <li
            style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
            <strong><span style='line-height:115%;font-family:"Arial",sans-serif;font-size:10px;'>PENGUJIAN
                    INTERNAL&nbsp;</span></strong>
        </li>
    </ol>
</div>
<table style="border-collapse:collapse;border:none;">
    <tbody>
        <tr>
            <td style="width:31.35pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:24.65pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <strong><span
                            style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>No</span></strong>
                </p>
            </td>
            <td
                style="width:119.35pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;height:24.65pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <strong><span
                            style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>PENETAPAN</span></strong>
                </p>
            </td>
            <td
                style="width:200pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;height:24.65pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <strong><span
                            style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>SPESIFIKASI</span></strong>
                </p>
            </td>
            <td
                style="width:93.8pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;height:24.65pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <strong><span
                            style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>HASIL</span></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width:31.35pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:24.5pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>1</span>
                </p>
            </td>
            <td
                style="width:119.35pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:24.5pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>PEMERIAN</span>
                </p>
            </td>
            <td
                style="width:220pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:24.5pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>Serbuk amorf; putih; tidak berbau;
                        tidak berasa</span>
                </p>
            </td>
            <td
                style="width: 93.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 24.5pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width:31.35pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:22.25pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>2</span>
                </p>
            </td>
            <td
                style="width:119.35pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.25pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>KELARUTAN</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width:220pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.25pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>Praktis tidak larut dalam air dan dalam
                        etanol, larut dalam asam mineral encer dan dalam larutan alkali hidroksida</span>
                </p>
            </td>
            <td
                style="width: 93.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 22.25pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width:31.35pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:49.9pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>3</span>
                </p>
            </td>
            <td
                style="width:119.35pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:49.9pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>PENGUJIAN KAPASITAS PENETRALAN
                        ASAM</span>
                </p>
            </td>
            <td
                style="width:220pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:49.9pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>Tidak kurang dari 25.0 miliekuivalen
                        per gram</span>
                </p>
            </td>
            <td
                style="width:93.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:49.9pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width:31.35pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:35.5pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>4</span>
                </p>
            </td>
            <td
                style="width:119.35pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.5pt;">
                <p
                    style='margin-top:6.0pt;margin-right:0cm;margin-bottom:  0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:6.0pt;margin-right:0cm;margin-bottom:  0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>pH</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width:220pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.5pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>Tidak lebih dari 10,0</span><span
                        style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;lakukan penetapan menggunakan
                        larutan zat terdispersi dalam air</span><span
                        style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;(1 dalam 25)</span>
                </p>
            </td>
            <td
                style="width: 93.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 35.5pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width:31.35pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:48.45pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>5</span>
                </p>
            </td>
            <td
                style="width:119.35pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:48.45pt;">
                <p
                    style='margin-top:6.0pt;margin-right:0cm;margin-bottom:  0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>KADAR</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width:220pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:48.45pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>Mengandung setara tidak kurang dari
                        76,5 % Al(OH)<sub>3</sub></span><sub><span
                            style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span></sub><span
                        style='font-size:10px;font-family:"Arial",sans-serif;'>dan dapat mengandung aluminium karbonat
                        dan aluminium bikarbonat basa dalam jumlah bervariasi&nbsp;</span>
                </p>
            </td>
            <td
                style="width: 93.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 48.45pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width:31.35pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:37.35pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>6</span>
                </p>
            </td>
            <td
                style="width:119.35pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:37.35pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>MIKROBIOLOGI</span>
                </p>
                <p
                    style='margin-top:6.0pt;margin-right:0cm;margin-bottom:  0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width: 220pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 37.35pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>Angka Lempeng Total (ALT) &nbsp; &nbsp;
                        &nbsp;: Tidak lebih dari 1.000 cfu/g</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>Angka Kapang Khamir (AKK) &nbsp; &nbsp;
                        : Tidak lebih dari 100 cfu/g</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <em><span style='font-size:10px;font-family:"Arial",sans-serif;'>Escherichia coli &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp;</span></em><span style='font-size:10px;font-family:"Arial",sans-serif;'>:
                        Negatif&nbsp;</span>
                </p>
            </td>
            <td
                style="width: 93.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 37.35pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width:31.35pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:42.1pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width:119.35pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:42.1pt;">
                <p
                    style='margin-top:6.0pt;margin-right:0cm;margin-bottom:  0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width: 220pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 42.1pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width: 93.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 42.1pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width:31.35pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:18.25pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width:119.35pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.25pt;">
                <p
                    style='margin-top:6.0pt;margin-right:0cm;margin-bottom:  0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:6.0pt;margin-right:0cm;margin-bottom:  0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width:220pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.25pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width: 93.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 18.25pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width:31.35pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:18.25pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width:119.35pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.25pt;">
                <p
                    style='margin-top:6.0pt;margin-right:0cm;margin-bottom:  0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width:220pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.25pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width: 93.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 18.25pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-indent:36.0pt;'>
    <span style='font-size:10px;font-family:"Arial",sans-serif;'>CATATAN&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp;:
        &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..</span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-indent:36.0pt;'>
    <span style='font-size:10px;font-family:"Arial",sans-serif;'>TANGGAL SELESAI&nbsp; &nbsp; &nbsp;&nbsp;:
        &nbsp;</span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-indent:36.0pt;'>
    <span style='font-size:10px;font-family:"Arial",sans-serif;'>DISPOSISI&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>DILULUSKAN /
            DITOLAK</strong></span>
</p>
<table style="margin-left:-.25pt;border-collapse:collapse;border:none;">
    <tbody>
        <tr>
            <td style="width:212.4pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <strong><span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>DIPERIKSA
                            OLEH</span></strong>
                </p>
            </td>
            <td style="width:212.95pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <strong><span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>DISETUJUI
                            OLEH</span></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 212.4pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 48.8pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:  "Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:  "Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>( <span
                            style="color:white;">Ibrohim Shaleh&nbsp;</span>)</span>
                </p>
            </td>
            <td
                style="width: 212.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 48.8pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:  "Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:  "Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:  "Arial",sans-serif;'>( <span style="color:white;">Apt.
                            Febby Herdianty S.Farm</span>)</span>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
</p>

<table style="float: left;width:100pt;border-collapse:collapse;border:none;margin-left:6.75pt;margin-right:6px;">
    <tbody>
        <tr>
            <td
                style="width:170pt;border: 1pt solid windowtext;padding: 0cm 5.4pt;height: 67.5pt;vertical-align: top;">
                <p
                    style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:18.0pt;text-align:center;'>
                    <strong><span style='font-size:11px;font-family:"Arial",sans-serif;'>PT. SOLAS LANGGENG
                            SEJAHTERA</span></strong>
                </p>
                <p
                    style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:18.0pt;text-align:center; padding: 10px;'>
                </p>
            </td>
            <td
                style="width:170pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;height:67.5pt;">
                <p
                    style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:-.25pt;text-align:center;'>
                    <strong><span style='font-size:16px;font-family:"Arial",sans-serif;'>DAFTAR PERIKSA BAHAN
                            BAKU</span></strong>
                </p>
            </td>
            <td
                style="width:170pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 67.5pt;vertical-align: top;">
                <p
                    style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:-.3pt;line-height:150%;'>
                    <span style='font-size:11px;line-height:  150%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span
                        style='font-size:11px;line-height:115%;font-family:  "Arial",sans-serif;'>04-QPD-003-003</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:11px;line-height:115%;font-family:"Arial",sans-serif;'>Revisi : 06</span>
                </p>
                <p style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:-.3pt;'><span
                        style='font-size:11px;font-family:"Arial",sans-serif;'>Tanggal&nbsp;</span><span
                        style='font-size:11px;font-family:"Arial",sans-serif;'>Berlaku :&nbsp;</span></p>
                <p style='margin:0cm;font-size:11px;font-family:"Calibri",sans-serif;margin-right:-.3pt;'><span
                        style='font-size:11px;font-family:"Arial",sans-serif;'><?= $dl['tgl_berlaku'] ?></span></p>
            </td>
        </tr>
    </tbody>
</table>

<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>Tanggal Sampling&nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;:&nbsp; <?= $dl['tgl_sampling'] ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>Nama Bahan Baku&nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: <?= $dl['produk_name'] ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>No. Batch&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;: <?= $dl['nomer_batch'] ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>Exp.Date&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;: <?= $dl['exp_date'] ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>Produsen&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp;&nbsp; : <?= $dl['produsen'] ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>Supplier&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp;&nbsp; : <?= $dl['supplier'] ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>Jumlah Penerimaan&nbsp; &nbsp; &nbsp;
        &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <?= $dl['jumlah_penerimaan'] ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>No. Analisa&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : <?= $dl['nomer_analisa'] ?></span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>No. Protap Analisa Bahan Baku :
        &nbsp;</span><span
        style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'><?= $dl['no_protap_analisa_bb'] ?></span><span
        style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;Rev. 06 Tanggal Berlaku : <?= $dl['tgl_berlaku'] ?></span>
</p>
<div
    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <ol start="2" style="margin-bottom:0cm;list-style-type: upper-alpha;margin-left:8px;">
        <li
            style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
            <strong><span style='line-height:115%;font-family:"Arial",sans-serif;font-size:10px;'>PENGUJIAN
                    EKSTERNAL&nbsp;</span></strong>
        </li>
    </ol>
</div>
<table style="border-collapse:collapse;border:none;">
    <tbody>
        <tr>
            <td style="width:30.85pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <strong><span
                            style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>No</span></strong>
                </p>
            </td>
            <td style="width:117.4pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <strong><span
                            style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>PENETAPAN</span></strong>
                </p>
            </td>
            <td style="width:5.0cm;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <strong><span
                            style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>SPESIFIKASI</span></strong>
                </p>
            </td>
            <td style="width:92.25pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <strong><span
                            style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>HASIL</span></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td style="width:30.85pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>1</span>
                </p>
            </td>
            <td
                style="width:117.4pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>IDENTIFIKASI</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width:5.0cm;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <div
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <ol start="1"
                        style="margin-bottom:0cm;list-style-type: upper-alpha;margin-left:2.8000000000000007px;">
                        <li
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                            <span style='font-family:"Arial",sans-serif;'>Spektrum serapan inframerah zat yang
                                didispersikan dalam kalium bromida P menunjukkan maksimum hanya pada bilangan gelombang
                                yang sama seperti pada Gel Aluminium Hidroksida Kering BPFI&nbsp;</span>
                        </li>
                        <li
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                            <span style='font-family:"Arial",sans-serif;'>Larutan menunjukkan reaksi Aluminium cara A
                                dan B seperti yang tertera pada Uji Identifikasi Umum&nbsp;</span>
                        </li>
                    </ol>
                    <div
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                        <ol start="1"
                            style="margin-bottom:0cm;list-style-type: lower-alpha;margin-left:25.299999999999997px;">
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                                <span style='font-family:"Arial",sans-serif;'>Terbentuk endapan berupa gel putih yang
                                    tidak larut dalam ammonium hidroksida 6 N berlebih&nbsp;</span>
                            </li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                                <span style='font-family:"Arial",sans-serif;font-size:10px;'>Terbentuk endapan berupa
                                    gel putih yang larut dalam natrium hidroksida 1 N atau natrium sulfida LP
                                    berlebih&nbsp;</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </td>
            <td
                style="width: 92.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td style="width:30.85pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>2</span>
                </p>
            </td>
            <td
                style="width:117.4pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>Klorida&nbsp;</span>
                </p>
            </td>
            <td
                style="width:5.0cm;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>Tidak lebih dari 0.85 %&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width: 92.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td style="width:30.85pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>3</span>
                </p>
            </td>
            <td
                style="width:117.4pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>Sulfat</span>
                </p>
            </td>
            <td
                style="width:5.0cm;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>Tidak lebih dari 0,6 %</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width: 92.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width:30.85pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.5pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>4</span>
                </p>
            </td>
            <td
                style="width: 117.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 26.5pt;vertical-align: bottom;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>Arsen</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width:5.0cm;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:26.5pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>Tidak lebih dari 8 bpj&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width: 92.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 26.5pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td style="width:30.85pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>5</span>
                </p>
            </td>
            <td
                style="width:117.4pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>Logam Berat&nbsp;</span>
                </p>
            </td>
            <td
                style="width:5.0cm;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>Tidak lebih dari 60 bpj</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
            <td
                style="width: 92.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-indent:36.0pt;'>
    <span style='font-size:10px;font-family:"Arial",sans-serif;'>CATATAN&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp;:
        &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..</span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-indent:36.0pt;'>
    <span style='font-size:10px;font-family:"Arial",sans-serif;'>TANGGAL SELESAI&nbsp; &nbsp; &nbsp;&nbsp;:
        &nbsp;</span>
</p>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-indent:36.0pt;'>
    <span style='font-size:10px;font-family:"Arial",sans-serif;'>DISPOSISI&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>DILULUSKAN /
            DITOLAK</strong></span>
</p>
<table style="margin-left:-.25pt;border-collapse:collapse;border:none;">
    <tbody>
        <tr>
            <td style="width:212.4pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <strong><span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>DIPERIKSA
                            OLEH</span></strong>
                </p>
            </td>
            <td style="width:212.95pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <strong><span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>DISETUJUI
                            OLEH</span></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 212.4pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 48.8pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:  "Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:  "Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>( <span
                            style="color:white;">Ibrohim Shaleh&nbsp;</span>)</span>
                </p>
            </td>
            <td
                style="width: 212.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 48.8pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:  "Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:  "Arial",sans-serif;'>&nbsp;</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:11px;font-family:"Calibri",sans-serif;text-align:center;'>
                    <span style='font-size:10px;font-family:  "Arial",sans-serif;'>( <span style="color:white;">Apt.
                            Febby Herdianty S.Farm.</span>)</span>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p
    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:11px;font-family:"Calibri",sans-serif;'>
    <span style='font-size:10px;line-height:115%;font-family:"Arial",sans-serif;'>&nbsp;</span>
</p>
<?php endforeach; ?>