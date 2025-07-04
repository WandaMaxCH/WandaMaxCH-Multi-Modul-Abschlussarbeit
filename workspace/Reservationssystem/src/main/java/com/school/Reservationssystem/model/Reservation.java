package com.school.Reservationssystem.model;

import java.sql.Time;

public class Reservation {

    private Long id;
    private Time beginnTime;
    private Time endTime;
    private int zimmer;
    private String bemerkung;
    private String  teilnehmerList;

    //getter
    public Long getId() {
        return id;
    }
    public void setId(Long id) {
        this.id = id;
    }
    public Time getbeginnTime() {return beginnTime;}
    public Time getendTime() {return endTime;}
    public int getzimmer() {return zimmer;}
    public String getbemerkung() {return bemerkung;}
    //Check out if actually String like in Doku. (in which case the List converts to String) or List
    public String getteilnehmerList() {return teilnehmerList;}

    //setter
    public void setBeginnTime(Time beginnTime) {this.beginnTime = beginnTime;}

    public void setEndTime(Time endTime) {this.endTime = this.endTime;}

    public void setzimmer(int zimmer) {this.zimmer = zimmer;}

    public void setbemerkung(String username) {this.bemerkung = username;}

    public void setteilnehmerList(String username) {this.teilnehmerList = username;}

}
