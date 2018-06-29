function changes(fr) {
    if (fr == 1) {
        //뿌려줄값을 배열로정렬
        num = new Array("강원지방경찰청", "경기남부지방경찰청", "경기북부지방경찰청","경남지방경찰청","경북지방경찰청","전남지방경찰청","전북지방경찰청","인천지방경찰청","충남지방경찰청");
        vnum = new Array("1", "2", "3");
    }
    else if (fr == 2) {
        num = new Array("2)첫번째목록", "2)두번째목록", "2)세번째목록");
        vnum = new Array("1", "2", "3");
    }
    // 셀렉트안의 리스트를 기본값으로 한다..
    for (i = 0; i < form.test2.length; i++) {
        form.test2.options[0] = null;
    }
    //포문을 이용하여 두번째(test2)셀렉트 박스에 값을 뿌려줍니당)
    for (i = 0; i < num.length; i++) {
        document.form.test2.options[i] = new Option(num[i], vnum[i]);
    }
}

