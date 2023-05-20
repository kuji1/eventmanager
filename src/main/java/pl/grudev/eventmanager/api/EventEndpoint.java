package pl.grudev.eventmanager.api;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;
import pl.grudev.eventmanager.domain.Event;

import java.util.List;

@RestController
@RequestMapping("/")
public interface EventEndpoint {

    @GetMapping("/events/{id}")
    Event getEvent(@PathVariable String id);

    @GetMapping("/events")
    List<Event> getEvents();
}
