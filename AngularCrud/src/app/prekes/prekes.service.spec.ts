import { TestBed } from '@angular/core/testing';

import { PrekesService } from './prekes.service';

describe('PrekesService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: PrekesService = TestBed.get(PrekesService);
    expect(service).toBeTruthy();
  });
});
