import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { PrekesComponent } from './prekes.component';

describe('PrekesComponent', () => {
  let component: PrekesComponent;
  let fixture: ComponentFixture<PrekesComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PrekesComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PrekesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
