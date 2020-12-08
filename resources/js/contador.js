const getRemainTime = deadline => {

    let now = new Date(),
        remainTime = (new Date(deadline) - now + 1000) / 1000;

    remainSecond = ('0' + Math.floor(remainTime % 60)).slice(-2),
        remainMinutes = ('0' + Math.floor(remainTime / 60 % 60)).slice(-2),
        remainHours = ('0' + Math.floor(remainTime / 3600 % 24)).slice(-2),
        remainDays = Math.floor(remainTime / (3600 * 24));

    return {

        remainTime,
        remainSecond,
        remainMinutes,
        remainHours,
        remainDays
    }

};

console.log(getRemainTime('Sep 15 2020 22:40:33 GMT-0300'));