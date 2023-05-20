package pl.grudev.eventmanager.api;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;
import pl.grudev.eventmanager.domain.Event;

@RestController
@RequestMapping("/")
public interface EventEndpoint {

    @GetMapping("/events/{id}")
    Event getEvent(@PathVariable String id);
}
