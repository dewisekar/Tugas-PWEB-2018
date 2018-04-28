$(document).ready(function() {
	var nama;
	var list_soal = [{
		soal: "1. Apakah yang paling kamu inginkan dari orang lain?",
		pilihan: ["a. Hormat dan kepatuhan", "b. Kasih sayang dan penerimaan", "c. Jarak dan privasi"]
	}, {
		soal: "2. Mana yang terbaik bagi kamu?",
		pilihan: ["a. Memimpin orang lain", "b. Ditolong dan dilindungi", "c. Bertindak menurut cara saya sendiri"]
	}, {
		soal: "3. Mana yang kamu anggap paling penting?",
		pilihan: ["a. Orang lain bertindak sesuai keinginan saya", "b. Berbuat sesuai harapan orang lain", "c. Menuruti kehendak saya sendiri"]
	}, {
		soal: "4. Apa yang kamu harapkan bila bertemu orang baru?",
		pilihan: ["a. Berguna bagi saya", "b. Semoga menyukai saya", "c. Tidak mengganggu atau mencampuri urusan saya"]
	}, {
		soal: "5. Sifat mana yang tidak kamu sukai?",
		pilihan: ["a. Cengeng", "b. Intelektual", "c. Agresif dan lugas"]
	}, {
		soal: "6. Apabila ada orang mengganggu, apa yang kamu lakukan?",
		pilihan: ["a. Pamer kekuatan sehingga dia takut", "b. Berusaha menjadikan teman agar tak mengganggu", "c. Menghindar"]
	}, {
		soal: "7. Apa yang paling menjadi perhatian dalam hidup kamu?",
		pilihan: ["a. Cita-cita dan karir", "b. Membina hubungan dengan orang lain", "c. Menjaga kehidupan pribadi"]
	}, {
		soal: "8. Pilih yang cocok dengan sikap kamu dalam menjalani kehidupan!",
		pilihan: ["a. Saya berani menghadapi hidup", "b. Saya bisa menyesuaikan diri", "c. Hidup ini terkadang menakutkan"]
	}, {
		soal: "9. Bagaimana cara kamu dalam membuat suatu keputusan?",
		pilihan: ["a. Saya lakukan sendiri", "b. Terlebih dahulu merundingkan dengan oran lain", "c. Seringkali orang lain yang memutuskan"]
	}, {
		soal: "10. Bagaimana cara mengontrol perasaan kamu?",
		pilihan: ["a. Menghadapi hidup dengan tegar", "b. Menyesuaikan diri terhadap tuntutan hidup", "c. Ikut arus kehidupan"]
	}, {
		soal: "11. Mana yang terpenting bagi kamu?",
		pilihan: ["a. Mengatasi persoalan sesuai cara saya", "b. Menyesuaikan kebutuhan pribadi dengan kebutuhan orang lain", "c. Menjaga segala sesuatu agar tetap terkendali"]
	}, {
		soal: "12. Kehidupan kamu akan lebih mudah bila ...",
		pilihan: ["a. Tantangan mudah diatasi", "b. Segala sesuatu bisa dikompromikan", "c. Komplikasi yang muncul hanya sedikit"]
	}, {
		soal: "13. Bila muncul masalah baru ...",
		pilihan: ["a. Biasanya sanggup menghadapinya", "b. Melakukan kompromi dan menyesuaikan", "c. Sering kali kewalahan"]
	}, {
		soal: "14. Ketika merenungkan kembali tindakan yang sudah dilakukan, gagasan apa yang sering muncul?",
		pilihan: ["a. Sebenarnya saya mampu melakukannya dengan mudah, tapi ternyata usaha saya berlebihan", "b. Sering terpaksa kompromi meski sebenarnya tidak perlu", "c. Ternyata masalahnya tidak sesulit yang saya duga"]
	}];

	var kepribadian = [{
		name: "Reformer / Perfeksionis",
		desc: "Seorang yang rasional dan sangat idealis. Punya jiwa kuat dalam membedakan benar dan salah. Umumnya seorang guru, atau agen perubahan (agen reformasi). Ingin selalu memperbaiki yang salah. Tapi terkadang terlalu kritis dan terlalu perfeksionis."
	}, {
		name: "Giver / Helper",
		desc: "Seorang yang berjiwa merawat, peduli kepada sesamanya. Berhati lembut, tulus dan empati kepada orang lain. Mau berkorban untuk orang lain. Suka membantu orang lain. Namun terkadang terlalu sentimentil (perasa). Terkadang punya masalah dalam hal menyampaikan kebutuhannya sendiri kepada orang lain. Menuntut orang lain mengerti kebutuhannya."
	}, {
		name: "Achiever / Motivator / Performer",
		desc: "Seorang yang berorientasi pada prestasi. Energik, bersemangat, percaya diri. Punya ambisi untuk maju. Terkadang terlalu berpikir tentang pandangan orang lain terhadap dirinya. Terlalu gila kerja dan terlalu suka bersaing untuk menang."
	}, {
		name: "Romantic / Artist / Individualist",
		desc: "Seorang yang sensitif dan introspektif (melihat kedalam diri sendiri). Kreatif, dapat mengekspresikan diri. Terkadang emosinya berubah-ubah (moody). Terlalu menarik diri dari pergaulan. Kurang nyaman bertemu banyak orang. Terkadang mengasihani diri sendiri."
	}, {
		name: "Observer / Thinker / Investigator",
		desc: "Seorang yang memiliki otak cerebral kuat. Punya rasa penasaran tinggi. Ingin mengetahui sesuatu secara mendalam. Mampu berkonsentrasi terhadap keahlian-keahlian yang rumit. Mandiri. Inovatif. Dan punya kemampuan inventif (menemukan sesuatu). Terkadang terlalu asyik dengan konsep-konsep gagasannya sendiri. Dapat melihat dunia dengan cara pandang yang berbeda. Terkadang terlalu memisahkan diri dari bertemu banyak orang."
	}, {
		name: "Loyalist / Pessimist",
		desc: "Seorang yang terlalu menekankan rasa aman. Punya komitmen. Bertanggungjawab, dapat bekerja keras. Sering meragukan diri sendiri. Kurang yakin dan kurang percaya diri. Kurang bisa mengambil keputusan."
	}, {
		name: "Generalist / Optimist / Adventure",
		desc: "Seorang yang selalu sibuk. Punya sikap terbuka terhadap orang lain. Berjiwa spontan. Bersemangat. Selalu optimis dan yakin pada diri sendiri. Terkadang kurang disiplin mengerjakan satu hal. Kurang fokus. Selalu mencari pengalaman-pengalaman baru. Kurang bisa bersabar."
	}, {
		name: "Challenger/ Leader / Boss/ Protector/ Intimidator",
		desc: "Seorang yang dominan. Percaya diri. Berjiwa melindungi. Gaya bicara langsung pada intinya. Terkadang cenderung egois dan mendominasi. Merasa dia harus mengendalikan lingkungan, dan orang-orang di sekitarnya. Cenderung mudah marah (temperamental)."
	}, {
		name: "Peacemaker / Mediator/ Accomodator",
		desc: "Seorang yang easygoing. Bisa mempercayai orang lain. Bisa menerima orang lain. Emosinya stabil. Cukup kreatif dan optimis. Terkadang harus mengajak orang lain untuk bepergian untuk mencari rasa aman. Selalu menghindari konflik. Tidak suka berselisih. Namun terkadang bersikap keras kepala."
	}];
	var kategori = [ [8, 2, 5], [3, 6, 9], [7, 1, 4] ];
	var selected = [];
	var jumlah_soal = list_soal.length;
	var current_soal = 0;

	function submitName() {
		nama = $('#input-nama').val();

		if (nama == '') {
			alert('Nama harus diisi.');
		} else {
			$('.input-name').hide(200, showSoal());
		}
	}

	function showSoal() {
		$('.soal').text(list_soal[current_soal].soal);
		count = 0;
		$('.jawaban').each(function() {
			$(this).removeClass('selected');
			if ($(this).attr('value') == selected[current_soal]) {
				$(this).addClass('selected');
			}
			$(this).text(list_soal[current_soal].pilihan[count]);
			count++;
		});
		$('.quiz').show(200);
	}

	function finish() {
		hitungJawaban();
	}

	function hitungJawaban() {
		list = {};
		max1 = 0;
		max2 = 0;
		$.each(selected, function(index, value) {
			if (index < 7) {
				if (list[value] == null)
					list[value] = 1;
				else
					list[value]++;

				if (list[value] > max1) {
					max1 = list[value];
					res1 = value;
				}
			} else {
				if (list[value] == null)
					list[value] = 1;
				else
					list[value]++;

				if (list[value] > max2) {
					max2 = list[value];
					res2 = value;
				}
			}
		});

		// alert(kepribadian[kategori[res1][res2]-1].name);
		$('.quiz').hide(200, function() {
			$('.res-nama').text(nama);
			$('.res-name').text(kepribadian[kategori[res1][res2]-1].name);
			$('.res-desc').text(kepribadian[kategori[res1][res2]-1].desc);
			$('.result').show(200);
		});
	}

	$('.btn-restart').click(function() {
		nama = undefined;
		selected = [];
		current_soal = 0;
		$('.btn-next').text('Next');
		$('.btn-prev').attr('disabled', '');
		$('.result').hide(200, function() {
			$('.input-name').show(200);
		});
	});

	$('.btn-next').click(function() {
		current_soal++;
		if (current_soal > jumlah_soal-1) {
			current_soal--;
			finish();
		} else {
			showSoal();
			if (current_soal == jumlah_soal-1) {
				$(this).text('Finish');
			}

			if (current_soal == 1) {
				$('.btn-prev').removeAttr('disabled');
			}
		}
	});

	$('.btn-prev').click(function() {
		current_soal--;
		showSoal();
		if (current_soal == 0) {
			$(this).attr('disabled', '');
		}

		if (current_soal == jumlah_soal-2) {
			$('.btn-next').text('Next');
		}
	});

	$('.jawaban').click(function() {
		$('.jawaban').each(function() {
			$(this).removeClass('selected');
		});

		$(this).addClass('selected');
		selected[current_soal] = $(this).attr('value');
	});

	$('#btnInputNama').click(submitName);
});