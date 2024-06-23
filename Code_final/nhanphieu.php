<?php
include_once('./header-member.php')
?>
<div class="body pb120 nhanphieu">
    <div class="center flex">
        <div class="np-left flex-col">
            <h3 class="np-left-title">Thời gian yêu cầu hỗ trợ</h3>
            <div class="flex">
                <div class="np-khan-cap np-rank flex-center"><span>H</span></div>
                <p class="np-khan-cap-p">Trong vòng vài giờ</p>
            </div>
            <div class="flex">
                <div class="np-day np-rank flex-center"><span>D</span></div>
                <p class="np-khan-cap-p">Trong vòng vài ngày</p>
            </div>
            <div class="flex">
                <div class="np-week np-rank flex-center"><span>W</span></div>
                <p class="np-khan-cap-p">Trong vòng vài tuần</p>
            </div>
            <div class="flex">
                <div class="np-month np-rank flex-center"><span>M</span></div>
                <p class="np-khan-cap-p">Trong tháng này</p>
            </div>
        </div>
        <div class="np-right flex-col">
            <div class="np-right-header flex">
                <h2 class="np-right-header-p">Bộ lọc</h2>
                <div class="np-right-header-loc flex">
                    <div class="relative">
                        <input type="text" readonly="readonly" autocomplete="off" placeholder="Lọc theo Thời gian" class="np-right-header-input relative" id="loc-thoi-gian">
                        <i class="fa-solid fa-chevron-up fa-rotate-180 fa-xs np-right-header-arrow"></i>
                        <div class="bo-loc-sub">
                            <div class="bo-loc-sub-content">Trong vòng vài giờ</div>
                            <div class="bo-loc-sub-content">Trong vòng vài ngày</div>
                            <div class="bo-loc-sub-content">Trong vòng vài tuần</div>
                            <div class="bo-loc-sub-content">Trong tháng này</div>
                        </div>
                    </div>
                    <div class="relative">
                        <input type="text" readonly="readonly" autocomplete="off" placeholder="Lọc theo Danh mục" class="np-right-header-input relative" id="loc-danh-muc">
                        <i class="fa-solid fa-chevron-up fa-rotate-180 fa-xs np-right-header-arrow"></i>
                        <div class="bo-loc-sub">
                            <div class="bo-loc-sub-content">Hỗ trợ cài đặt và cấu hình</div>
                            <div class="bo-loc-sub-content">Sửa chữa và bảo trì</div>
                            <div class="bo-loc-sub-content">Hỗ trợ các ứng dụng</div>
                            <div class="bo-loc-sub-content">Vệ sinh laptop</div>
                            <div class="bo-loc-sub-content">Cài đặt phòng máy</div>
                        </div>
                    </div>
                    <button class="np-right-header-btn"><span>Xóa bộ lọc</span></button>
                </div>
            </div>
            <div class="np-right-body">
                <div class="np-item flex">
                    <div class="flex fs16">
                        <div class="np-khan-cap np-rank flex-center"><span>H</span></div>
                        <div class="flex-col np-item-name">
                            <div class="np-title">Kích hoạt window cho em với</div>
                            <div class="flex">
                                <div class="np-item-loc np-item-dm">Hỗ trợ cài đặt và cấu hình</div>
                                <!-- <div class="np-item-loc np-item-time">Trong vòng vài ngày</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="flex fs14">
                        <div class="np-avatar-user"><img src="./assets/img/avatar.jpg"></div>
                        <div class="flex-col">
                            <div class="np-user-name">HoangTien07</div>
                            <div class="np-date">12/5/2023</div>
                        </div>
                        <button class="np-item-btn">Nhận phiếu</button>
                    </div>
                </div>
                <div class="np-item flex">
                    <div class="flex fs16">
                        <div class="np-day np-rank flex-center"><span>D</span></div>
                        <div class="flex-col np-item-name">
                            <div class="np-title">Kích hoạt window cho em với</div>
                            <div class="flex">
                                <div class="np-item-loc np-item-dm">Hỗ trợ cài đặt và cấu hình</div>
                                <!-- <div class="np-item-loc np-item-time">Trong vòng vài ngày</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="flex fs14">
                        <div class="np-avatar-user"><img src="./assets/img/avatar.jpg"></div>
                        <div class="flex-col">
                            <div class="np-user-name">HoangTien07</div>
                            <div class="np-date">12/5/2023</div>
                        </div>
                        <button class="np-item-btn">Nhận phiếu</button>
                    </div>
                </div>
                <div class="np-item flex">
                    <div class="flex fs16">
                        <div class="np-month np-rank flex-center"><span>M</span></div>
                        <div class="flex-col np-item-name">
                            <div class="np-title">Kích hoạt window cho em với</div>
                            <div class="flex">
                                <div class="np-item-loc np-item-dm">Hỗ trợ cài đặt và cấu hình</div>
                                <!-- <div class="np-item-loc np-item-time">Trong vòng vài ngày</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="flex fs14">
                        <div class="np-avatar-user"><img src="./assets/img/avatar.jpg"></div>
                        <div class="flex-col">
                            <div class="np-user-name">HoangTien07</div>
                            <div class="np-date">12/5/2023</div>
                        </div>
                        <button class="np-item-btn">Nhận phiếu</button>
                    </div>
                </div>
                <div class="np-item flex">
                    <div class="flex fs16">
                        <div class="np-khan-cap np-rank flex-center"><span>H</span></div>
                        <div class="flex-col np-item-name">
                            <div class="np-title">Kích hoạt window cho em với</div>
                            <div class="flex">
                                <div class="np-item-loc np-item-dm">Hỗ trợ cài đặt và cấu hình</div>
                                <!-- <div class="np-item-loc np-item-time">Trong vòng vài ngày</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="flex fs14">
                        <div class="np-avatar-user"><img src="./assets/img/avatar.jpg"></div>
                        <div class="flex-col">
                            <div class="np-user-name">HoangTien07</div>
                            <div class="np-date">12/5/2023</div>
                        </div>
                        <button class="np-item-btn">Nhận phiếu</button>
                    </div>
                </div>
                <div class="np-item flex">
                    <div class="flex fs16">
                        <div class="np-day np-rank flex-center"><span>D</span></div>
                        <div class="flex-col np-item-name">
                            <div class="np-title">Kích hoạt window cho em với</div>
                            <div class="flex">
                                <div class="np-item-loc np-item-dm">Hỗ trợ cài đặt và cấu hình</div>
                                <!-- <div class="np-item-loc np-item-time">Trong vòng vài ngày</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="flex fs14">
                        <div class="np-avatar-user"><img src="./assets/img/avatar.jpg"></div>
                        <div class="flex-col">
                            <div class="np-user-name">HoangTien07</div>
                            <div class="np-date">12/5/2023</div>
                        </div>
                        <button class="np-item-btn">Nhận phiếu</button>
                    </div>
                </div>
                <div class="np-item flex">
                    <div class="flex fs16">
                        <div class="np-month np-rank flex-center"><span>M</span></div>
                        <div class="flex-col np-item-name">
                            <div class="np-title">Kích hoạt window cho em với</div>
                            <div class="flex">
                                <div class="np-item-loc np-item-dm">Hỗ trợ cài đặt và cấu hình</div>
                                <!-- <div class="np-item-loc np-item-time">Trong vòng vài ngày</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="flex fs14">
                        <div class="np-avatar-user"><img src="./assets/img/avatar.jpg"></div>
                        <div class="flex-col">
                            <div class="np-user-name">HoangTien07</div>
                            <div class="np-date">12/5/2023</div>
                        </div>
                        <button class="np-item-btn">Nhận phiếu</button>
                    </div>
                </div>
                <div class="np-item flex">
                    <div class="flex fs16">
                        <div class="np-khan-cap np-rank flex-center"><span>H</span></div>
                        <div class="flex-col np-item-name">
                            <div class="np-title">Kích hoạt window cho em với</div>
                            <div class="flex">
                                <div class="np-item-loc np-item-dm">Hỗ trợ cài đặt và cấu hình</div>
                                <!-- <div class="np-item-loc np-item-time">Trong vòng vài ngày</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="flex fs14">
                        <div class="np-avatar-user"><img src="./assets/img/avatar.jpg"></div>
                        <div class="flex-col">
                            <div class="np-user-name">HoangTien07</div>
                            <div class="np-date">12/5/2023</div>
                        </div>
                        <button class="np-item-btn">Nhận phiếu</button>
                    </div>
                </div>
                <div class="np-item flex">
                    <div class="flex fs16">
                        <div class="np-day np-rank flex-center"><span>D</span></div>
                        <div class="flex-col np-item-name">
                            <div class="np-title">Kích hoạt window cho em với</div>
                            <div class="flex">
                                <div class="np-item-loc np-item-dm">Hỗ trợ cài đặt và cấu hình</div>
                                <!-- <div class="np-item-loc np-item-time">Trong vòng vài ngày</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="flex fs14">
                        <div class="np-avatar-user"><img src="./assets/img/avatar.jpg"></div>
                        <div class="flex-col">
                            <div class="np-user-name">HoangTien07</div>
                            <div class="np-date">12/5/2023</div>
                        </div>
                        <button class="np-item-btn">Nhận phiếu</button>
                    </div>
                </div>
                <div class="np-item flex">
                    <div class="flex fs16">
                        <div class="np-month np-rank flex-center"><span>M</span></div>
                        <div class="flex-col np-item-name">
                            <div class="np-title">Kích hoạt window cho em với</div>
                            <div class="flex">
                                <div class="np-item-loc np-item-dm">Hỗ trợ cài đặt và cấu hình</div>
                                <!-- <div class="np-item-loc np-item-time">Trong vòng vài ngày</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="flex fs14">
                        <div class="np-avatar-user"><img src="./assets/img/avatar.jpg"></div>
                        <div class="flex-col">
                            <div class="np-user-name">HoangTien07</div>
                            <div class="np-date">12/5/2023</div>
                        </div>
                        <button class="np-item-btn">Nhận phiếu</button>
                    </div>
                </div>
                <div class="np-item flex">
                    <div class="flex fs16">
                        <div class="np-khan-cap np-rank flex-center"><span>H</span></div>
                        <div class="flex-col np-item-name">
                            <div class="np-title">Kích hoạt window cho em với</div>
                            <div class="flex">
                                <div class="np-item-loc np-item-dm">Hỗ trợ cài đặt và cấu hình</div>
                                <!-- <div class="np-item-loc np-item-time">Trong vòng vài ngày</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="flex fs14">
                        <div class="np-avatar-user"><img src="./assets/img/avatar.jpg"></div>
                        <div class="flex-col">
                            <div class="np-user-name">HoangTien07</div>
                            <div class="np-date">12/5/2023</div>
                        </div>
                        <button class="np-item-btn">Nhận phiếu</button>
                    </div>
                </div>
                <div class="np-item flex">
                    <div class="flex fs16">
                        <div class="np-day np-rank flex-center"><span>D</span></div>
                        <div class="flex-col np-item-name">
                            <div class="np-title">Kích hoạt window cho em với</div>
                            <div class="flex">
                                <div class="np-item-loc np-item-dm">Hỗ trợ cài đặt và cấu hình</div>
                                <!-- <div class="np-item-loc np-item-time">Trong vòng vài ngày</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="flex fs14">
                        <div class="np-avatar-user"><img src="./assets/img/avatar.jpg"></div>
                        <div class="flex-col">
                            <div class="np-user-name">HoangTien07</div>
                            <div class="np-date">12/5/2023</div>
                        </div>
                        <button class="np-item-btn">Nhận phiếu</button>
                    </div>
                </div>
                <div class="np-item flex">
                    <div class="flex fs16">
                        <div class="np-month np-rank flex-center"><span>M</span></div>
                        <div class="flex-col np-item-name">
                            <div class="np-title">Kích hoạt window cho em với</div>
                            <div class="flex">
                                <div class="np-item-loc np-item-dm">Hỗ trợ cài đặt và cấu hình</div>
                                <!-- <div class="np-item-loc np-item-time">Trong vòng vài ngày</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="flex fs14">
                        <div class="np-avatar-user"><img src="./assets/img/avatar.jpg"></div>
                        <div class="flex-col">
                            <div class="np-user-name">HoangTien07</div>
                            <div class="np-date">12/5/2023</div>
                        </div>
                        <button class="np-item-btn">Nhận phiếu</button>
                    </div>
                </div>
                <div class="np-item flex">
                    <div class="flex fs16">
                        <div class="np-khan-cap np-rank flex-center"><span>H</span></div>
                        <div class="flex-col np-item-name">
                            <div class="np-title">Kích hoạt window cho em với</div>
                            <div class="flex">
                                <div class="np-item-loc np-item-dm">Hỗ trợ cài đặt và cấu hình</div>
                                <!-- <div class="np-item-loc np-item-time">Trong vòng vài ngày</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="flex fs14">
                        <div class="np-avatar-user"><img src="./assets/img/avatar.jpg"></div>
                        <div class="flex-col">
                            <div class="np-user-name">HoangTien07</div>
                            <div class="np-date">12/5/2023</div>
                        </div>
                        <button class="np-item-btn">Nhận phiếu</button>
                    </div>
                </div>
                <div class="np-item flex">
                    <div class="flex fs16">
                        <div class="np-day np-rank flex-center"><span>D</span></div>
                        <div class="flex-col np-item-name">
                            <div class="np-title">Kích hoạt window cho em với</div>
                            <div class="flex">
                                <div class="np-item-loc np-item-dm">Hỗ trợ cài đặt và cấu hình</div>
                                <!-- <div class="np-item-loc np-item-time">Trong vòng vài ngày</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="flex fs14">
                        <div class="np-avatar-user"><img src="./assets/img/avatar.jpg"></div>
                        <div class="flex-col">
                            <div class="np-user-name">HoangTien07</div>
                            <div class="np-date">12/5/2023</div>
                        </div>
                        <button class="np-item-btn">Nhận phiếu</button>
                    </div>
                </div>
                <div class="np-item flex">
                    <div class="flex fs16">
                        <div class="np-month np-rank flex-center"><span>M</span></div>
                        <div class="flex-col np-item-name">
                            <div class="np-title">Kích hoạt window cho em với</div>
                            <div class="flex">
                                <div class="np-item-loc np-item-dm">Hỗ trợ cài đặt và cấu hình</div>
                                <!-- <div class="np-item-loc np-item-time">Trong vòng vài ngày</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="flex fs14">
                        <div class="np-avatar-user"><img src="./assets/img/avatar.jpg"></div>
                        <div class="flex-col">
                            <div class="np-user-name">HoangTien07</div>
                            <div class="np-date">12/5/2023</div>
                        </div>
                        <button class="np-item-btn">Nhận phiếu</button>
                    </div>
                </div>
                <button class="div-cen btn">Xem thêm</button>
            </div>
        </div>
    </div>
</div>
<?php
include_once('./footer.php')
?>