<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Vacations’ automation");
$APPLICATION->SetPageProperty("description", "Vacations’ automation");
?> 
<div class="page-context"> 	 
	<div class="white_block2 zindex10">
		<div class="containerThin top3vw"> 	
			<h3 class="size60 thin center">คุณสมบัติการทำงาน</h3>
			<div class="otp__usab-blocks">
				<div class="usab_preim otp__m1"> 
					<p>การสร้างแผนการให้กับวันหยุด</p>
				</div>				 
				<div class="usab_preim otp__m2"> 
					<p>ตรวจสอบจำนวนวันหยุดที่เกินกำหนดได้อัตโนมัติ</p>
				</div>		
				<div class="clear"></div>				
				<div class="usab_preim otp__m3"> 
					<p>การสร้างคำร้องขอวันหยุด</p>
				</div>				 
				<div class="usab_preim otp__m4"> 
					<p>การปรับให้ทำงานเข้ากันกับระบบ ERP</p>
				</div>				 
				<div class="clear"></div>
				<div class="usab_preim otp__m5"> 
					<p>การอนุมัติคำร้อง </p>
				</div>				 
				<div class="usab_preim otp__m6"> 
					<p>การสร้าง และดาวน์โหลดเอกสารในรูปแบบสำหรับจัดพิมพ์ </p>
				</div>				 
				<div class="clear"></div>
				<div class="usab_preim otp__m7"> 
					<p>การส่งข้อมูลในรูปแบบจดหมายไปยังพนักงานเกี่ยวกับความจำเป็นในการวางแผนวันหยุด</p>
				</div>				 
				<div class="usab_preim otp__m8"> 
					<p>การสร้างบันทึกในตารางของพนักงาน และผู้จัดการ</p>
				</div>				 
				<div class="clear"></div>
				<div class="usab_preim otp__m9"> 
					<p>ตรวจสอบการขอวันลาหยุดพร้อมกันของพนักงานในแผนกเดียวกันได้อัตโนมัติ</p>
				</div>				 				 
				<div class="clear"></div>
			</div>
			<h3 class="size60 thin center top11vw">รายละเอียดของโซลูชั่น </h3>			
			<p class="center">วันทำงานวันแรกในเดือนมกราคมของทุกปี ระบบจะส่งข้อมูลเป็นจดหมายไปยังพนักงานทุกคนเกี่ยวกับความจำเป็นในการวางแผนวันหยุด</p>
		</div>	
	</div>	
	<div class="purple_block zindex9 otp__pictBlock1 top6vw">
		<div class="container top6vw"> 	
			<h3 class="size26 thin center">การอนุมัติแผนวันหยุด</h3>			
			<p class="center thin">พนักงานสร้างแผนวันลาพักร้อนในระบบ และส่งคำรองขอเพื่อรอการอนุมัติ โดยมีการระบุ:</p>		
			<div class="otp__descreshs">
				<div class="otp__descreshs-item">
					<div class="center otp__descreshs-img">
						<img src="/images/seoaudit/komandirovki/spo1.png" alt=""/>
					</div>
					<p class="center otp__descreshs-title">ประเภทของวันหยุด</p>
				</div>
				<div class="otp__descreshs-item">
					<div class="center otp__descreshs-img">
						<img src="/images/seoaudit/komandirovki/spo2.png" alt=""/>
					</div>
					<p class="center otp__descreshs-title">ระยะเวลา</p>
				</div>
				<div class="clear"></div>
			</div>
		</div>		
	</div>	
	<div class="white_block zindex8 top6vw">
		<div class="containerThin top3vw">
			<div>
				<div class="otp__formtext-text">
					<p>ขั้นตอนในการอนุมัติเกิดขึ้นในระบบผ่านกลุ่มของพนักงาน “การอนุมัติแผนวันหยุด”</p>
				</div>
				<div class="otp__formtext-form">
					<img src="/images/Group_2).jpg" alt="" style="100%;box-shadow:0 0 5px rgba(0, 0, 0, 0.2);">
				</div>
			</div>
			<h3 class="size26 thin top6vw center">ขั้นตอนการอนุมัติ</h3>	
			<div class="otp__prso">
				<div class="otp__prso-l">
					<div class="otp__prso-cont">
						<div class="otp__prso-item center">
							<img src="/images/seoaudit/komandirovki/ps1.png" alt=""/>
							<p>การคาดหวังผลลัพธ์เกี่ยวกับการอนุมัติ </p>
						</div>
						<div class="otp__prso-arrow"></div>
						<div class="otp__prso-item center">
							<img src="/images/seoaudit/komandirovki/ps2.png" alt=""/>
							<p>การแจ้งเตือน </p>
						</div>
						<div class="otp__prso-arrow"></div>
						<div class="otp__prso-item center">
							<img src="/images/seoaudit/komandirovki/ps3.png" alt=""/>
							<p>การส่งต่อไปให้ผู้อื่น</p>						
						</div>
					</div>
				</div>
				<div class="otp__prso-r">
					<p>แผนวันหยุดจะถือว่าได้รับการอนุม้ติก็ต่อเมื่อบุคคลที่มีส่วนรับผิดชอบในการอนุมัติทุกคนยืนยันคำร้องขอของพนักงานแล้ว ในกรณีที่ถูกปฏิเสธคำร้อง แผนการขอวันหยุดจะถูกส่งกลับไปยังผู้พนักงานผู้ทำการร้องขอเพื่อให้ทำการปรับเปลี่ยนข้อมูลในระบบ</p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>	
	</div>
	<div class="purple_block zindex7 otp__pictBlock2 top9vw">
		<div class="container top6vw"> 	
			<h3 class="size26 thin center">การอนุมัติคำร้องขอวันหยุด</h3>			
			<p class="center thin">ขั้นตอนนี้เป็นขั้นตอนสุดท้ายในการลงทะเบียนวันหยุด การอนุมัติคำร้องขอวันหยุดจะคล้ายกันกับการดำเนินการของการวางแผนวันหยุด แต่จะดำเนินการในกลุ่มอื่น:</p>		
			<div class="otp__descreshs">
				<div class="otp__descreshs-item">
					<div class="center otp__descreshs-img">
						<img src="/images/seoaudit/komandirovki/szo1.png" alt=""/>
					</div>
					<p class="center otp__descreshs-title">การอนุมัติแผนวันหยุด - วันหยุดที่ได้มีการวางแผนแล้วเรียบร้อย </p>
				</div>
				<div class="otp__descreshs-item">
					<div class="center otp__descreshs-img">
						<img src="/images/seoaudit/komandirovki/szo2.png" alt=""/>
					</div>
					<p class="center otp__descreshs-title">การอนุมัติวันหยุด ที่ไม่ได้ว่างแผนไว้ </p>
				</div>
				<div class="clear"></div>
			</div>
		</div>		
	</div>	 
	<div class="white_block2 zindex6 top6vw">
		<div class="containerThin top3vw otp__formtext2">
			<div class="otp__formtext-form">
				<img src="/images/Group_2_(2).jpg" alt="" style="100%;box-shadow:0 0 5px rgba(0, 0, 0, 0.2);">
			</div>
			<div class="otp__formtext-text">
				<p>คำร้องขอวันหยุด จะถือว่าได้รับการอนุมัติแล้วก็ต่อเมื่อบุคคลที่มีส่วนรับผิดชอบในการอนุมัติทุกคนยืนยันคำร้องขอของพนักงานแล้ว ในกรณีที่ถูกปฏิเสธคำร้อง แผนวันหยุดจะถูกส่งไปยังพนักงานผู้ทำการร้องขอเพื่อให้ทำการปรับเปลี่ยนข้อมูลในระบบ คำสั่งใน 1C จะถูกสร้างขึ้นสำหรับคำร้องที่ได้รับการอนุมัติแล้ว </p>
			</div>			
		</div>
		<div class="clear"></div>
	</div>	
	<div class="purple_block zindex7 koman__pictBlock2 top6vw">
		<div class="container"> 	
			<h3 class="size60 thin center">ผลลัพธ์ </h3>			
			<p class="center thin">จากการใช้ระบบวางแผนการจัดเตรียมวันหยุดโดยอัตโนมัติ:</p>	
			<div class="koman__cif center">
				<div class="audit_cb_b koman__cif-item"> 				 
					<div class="row thin">
						<span class="bold">1</span> 					 
						<p>ลดระยะเวลาในการอนุมัติเอกสาร และปรับปรุงขั้นตอนให้มีประสิทธิภาพยิ่งขึ้น </p>
					</div>
					<div class="row thin">
						<span class="bold">2</span> 					 
						<p>ลดค่าใช้จ่ายของฝ่ายบุคคล และแผนกบัญชีในการดำเนินงานเอกสารเกี่ยวกับการขอวันลาหยุด</p>
					</div>
       			</div>
				<div class="audit_cb_b koman__cif-item"> 				 
					<div class="row thin">
						<span class="bold">3</span> 					 
						<p>ควบคุมแผนวันหยุดของพนักงานให้เป็นไปตามนโยบายของแผนกบัญชี </p>
					</div>
					<div class="row thin">
						<span class="bold">4</span> 					 
						<p>เข้าใช้งานเอกสารได้ง่ายยิ่งขึ้น</p>
					</div>
       			</div>	
				<div class="clear"></div>
			</div>	
		</div>	 
	</div>	 
	<div class="gray_block zindex6 koman__sisb">
		<div class="containerThin top8vw"> 	
			<h3 class="size60 thin center">ราคาและข้อกำหนด </h3>	
			<div class="koman__pads">
				<div class="koman__pad-item">
					<span><img src="/images/seoaudit/komandirovki/baht.png" alt=""/></span>
					<p>เริ่มต้นที่  <strong>200,000 บาท</strong></p>
				</div>
				<div class="koman__pad-item">
					<span><img src="/images/seoaudit/komandirovki/d.png" alt=""/></span>
					<p>ระยะเวลา <strong>2 เดือน</strong></p>
				</div>
				<div class="clear"></div>
				<div class="context-button"><span>Send a request</span></div>
			</div>
		</div>	
	</div>	
	<div class="grey_block zindex5 koman__pictBlock3">
		<div class="containerThin"> 	
			<h3 class="size60 thin center">มีประโยชน์เมื่อไหร่?</h3>	
			<div class="koman__when">
				<div class="koman__when-item">
					<img src="/images/seoaudit/komandirovki/z1.png" alt=""/>
					<p>หากมีข้อผิดพลาดในการจัดเตรียมแผนวันหยุด และการประสานงานเกิดขึ้น ปัญหาเหล่านี้จะนำไปสู่การอนุมัติล่าช้า และสิ้นเปลืองกระดาษ</p>
				</div>
				<div class="koman__when-item">
					<img src="/images/seoaudit/komandirovki/z2.png" alt=""/>
					<p>ต้องการลดระยะเวลาในการร้องขออนุมัติ และลงทะเบียนเอกสารเพื่อวางแผนวันหยุด </p>
				</div>
				<div class="clear"></div>
			</div>			

		</div>		
	</div>	
</div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>